import 'dart:async';

import 'package:appclientes/controller/clients_controller.dart';
import 'package:appclientes/models/clients_model.dart';
import 'package:appclientes/screens/agregar_o_editar_cliente.dart';
import 'package:flutter/material.dart';
import 'package:flutter_toastr/flutter_toastr.dart';

class ClientsPage extends StatefulWidget {
  const ClientsPage({super.key});

  @override
  State<ClientsPage> createState() => _ClientsPageState();
}

class _ClientsPageState extends State<ClientsPage> {
  List<clientModel> clientlist = [];

  final StreamController _streamController = StreamController();

  Future getAllClients() async {
    clientlist = await ClientController().getClients();
    _streamController.sink.add(clientlist);
  }

  // Eliminar Cliente.
  deleteClient(clientModel clientModel) async {
    await ClientController()
        .DeleteClient(clientModel)
        // ignore: non_constant_identifier_names
        .then((Success) => {
              FlutterToastr.show("Cliente eliminado correctamente !", context,
                  duration: FlutterToastr.lengthLong,
                  position: FlutterToastr.center,
                  backgroundColor: Colors.green)
            })
        .onError((error, stackTrace) => {
              FlutterToastr.show(
                  "Cliente no se pudo eliminar correctamente !", context,
                  duration: FlutterToastr.lengthLong,
                  position: FlutterToastr.center,
                  backgroundColor: Colors.red)
            });
  }

  @override
  void initState() {
    // ignore: todo
    // TODO: implement initState
    Timer.periodic(Duration(seconds: 1), (timer) {
      getAllClients();
    });
    super.initState();
  }

  @override
  void dispose() {
    _streamController.close();
    super.dispose();
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      floatingActionButton: FloatingActionButton(
          onPressed: () {
            Navigator.push(
                context,
                MaterialPageRoute(
                    builder: ((context) => Agregar_Editar_clients())));
          },
          child: Icon(Icons.add)),
      appBar: AppBar(
        title: Text("Clientes"),
      ),
      body: SafeArea(
          child: StreamBuilder(
        stream: _streamController.stream,
        builder: (context, snapshots) {
          if (snapshots.hasData) {
            return ListView.builder(
                itemCount: clientlist.length,
                itemBuilder: ((context, index) {
                  clientModel client = clientlist[index];
                  return ListTile(
                    title: Text(client.nombres),
                    subtitle: Text(client.email),
                    trailing: IconButton(
                        onPressed: () {
                          deleteClient(client);
                        },
                        icon: Icon(
                          Icons.delete_outline,
                          color: Colors.red,
                        )),
                  );
                }));
          }
          return Center(
            child: CircularProgressIndicator(),
          );
        },
      )),
    );
  }
}
