// ignore_for_file: prefer_const_constructors, non_constant_identifier_names

import 'package:appclientes/components/date.dart';
import 'package:appclientes/components/formulario.dart';
import 'package:appclientes/controller/clients_controller.dart';
import 'package:appclientes/models/clients_model.dart';
import 'package:appclientes/screens/clients.dart';
import 'package:flutter/material.dart';
import 'package:flutter_toastr/flutter_toastr.dart';

class Agregar_Editar_clients extends StatefulWidget {
  const Agregar_Editar_clients({super.key});

  @override
  State<Agregar_Editar_clients> createState() => _Agregar_Editar_clientsState();
}

// ignore: camel_case_types
class _Agregar_Editar_clientsState extends State<Agregar_Editar_clients> {
  String _fecha = '';
  final _form_key = GlobalKey<FormState>();

  TextEditingController nombres = TextEditingController();
  TextEditingController apellidos = TextEditingController();
  TextEditingController email = TextEditingController();
  TextEditingController fecha_nacimiento = TextEditingController();
  TextEditingController direccion = TextEditingController();
  TextEditingController departamento = TextEditingController();
  TextEditingController municipio = TextEditingController();

  TextEditingController dui = TextEditingController();
  TextEditingController telefono = TextEditingController();
  TextEditingController sexo = TextEditingController();

  AddClient(clientModel clientModel) async {
    await ClientController().addClient(clientModel).then((Success) => {
          FlutterToastr.show("Cliente creado exitosamente", context,
              duration: FlutterToastr.lengthLong,
              position: FlutterToastr.center,
              backgroundColor: Colors.green),
          Navigator.pushReplacement(context,
              MaterialPageRoute(builder: ((context) => ClientsPage()))),
        });
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text("Cliente"),
        centerTitle: true,
      ),
      body: SingleChildScrollView(
        child: Column(
          children: [
            SizedBox(
              height: 30.0,
            ),
            Center(
              child: Text(
                "Registro De Clientes",
                style: TextStyle(fontSize: 25.0),
              ),
            ),
            SizedBox(
              height: 30.0,
            ),
            Form(
                key: _form_key,
                child: Column(
                  children: [
                    // Campo Nombre.
                    MyTextFields(
                        texto: "Nombres",
                        labeltexto: "Escribe tu Nombre",
                        icon: Icon(Icons.person),
                        icon2: Icon(Icons.person),
                        Inputcontroller: nombres),
                    SizedBox(height: 30.0),

                    // Campo Apellido.
                    MyTextFields(
                        texto: "Apellidos",
                        labeltexto: "Escribe tus Apellidos",
                        icon: Icon(Icons.person),
                        icon2: Icon(Icons.person),
                        Inputcontroller: apellidos),
                    SizedBox(height: 30.0),

                    // Campo Email.
                    MyTextFields(
                        texto: "Email",
                        labeltexto: "Escribe tu Email",
                        icon: Icon(Icons.email),
                        icon2: Icon(Icons.email),
                        Inputcontroller: email),
                    SizedBox(height: 30.0),

                    // Campo Fecha.
                    Padding(
                        padding: const EdgeInsets.symmetric(horizontal: 20.0),
                        child: TextFormField(
                          controller: fecha_nacimiento,
                          enableInteractiveSelection: false,
                          decoration: InputDecoration(
                              border: OutlineInputBorder(
                                  borderRadius: BorderRadius.circular(20.0)),
                              hintText: "Fecha",
                              labelText: "Escribe la fecha de nacimiento",
                              suffixIcon: Icon(Icons.perm_contact_calendar),
                              icon: Icon(Icons.calendar_today)),
                          onTap: () {
                            FocusScope.of(context)
                                .requestFocus(new FocusNode());
                            _selectDate(context);
                          },
                        )),

                    // MyTextDate(
                    //   texto: "Fecha",
                    //   labeltexto: "Escribe tu Fecha de nacimiento",
                    //   Inputcontrollerdate: fecha_nacimiento,
                    // ),
                    SizedBox(height: 30.0),

                    // Campo Departamento.
                    MyTextFields(
                        texto: "Departamento",
                        labeltexto: "Escribe tu Departamento",
                        icon: Icon(Icons.add_location),
                        icon2: Icon(Icons.add_location),
                        Inputcontroller: departamento),
                    SizedBox(height: 30.0),

                    // Campo Municipio.
                    MyTextFields(
                        texto: "Municipio",
                        labeltexto: "Escribe tu Municipio",
                        icon: Icon(Icons.add_location),
                        icon2: Icon(Icons.add_location),
                        Inputcontroller: municipio),
                    SizedBox(height: 30.0),

                    // Campo direccion.
                    MyTextFields(
                        texto: "Direccion",
                        labeltexto: "Escribe tu Direccion",
                        icon: Icon(Icons.add_location),
                        icon2: Icon(Icons.add_location),
                        Inputcontroller: direccion),
                    SizedBox(height: 30.0),

                    // Campo Dui.
                    MyTextFields(
                        texto: "Dui",
                        labeltexto: "Escribe tu numero de Dui",
                        icon: Icon(Icons.add),
                        icon2: Icon(Icons.add),
                        Inputcontroller: dui),
                    SizedBox(height: 30.0),

                    // Campo Telefono.
                    MyTextFields(
                        texto: "Telefono",
                        labeltexto: "Escribe tu Telefono",
                        icon: Icon(Icons.phone),
                        icon2: Icon(Icons.phone),
                        Inputcontroller: telefono),
                    SizedBox(height: 30.0),

                    // Campo Sexo.
                    MyTextFields(
                        texto: "Sexo",
                        labeltexto: "Escribe tu Sexo",
                        icon: Icon(Icons.person_outline),
                        icon2: Icon(Icons.person_outline),
                        Inputcontroller: sexo),
                    SizedBox(height: 30.0),
                  ],
                )),
            // Boton de enviar
            ElevatedButton(
                style: ElevatedButton.styleFrom(
                    fixedSize: Size(300.0, 50), elevation: 20.0),
                onPressed: () {
                  if (_form_key.currentState!.validate()) {
                    clientModel clienModel = clientModel(
                        nombres: nombres.text,
                        apellidos: apellidos.text,
                        email: email.text,
                        fecha_nacimiento: fecha_nacimiento.text,
                        departamento: departamento.text,
                        municipio: municipio.text,
                        direccion: direccion.text,
                        dui: dui.text,
                        telefono: telefono.text,
                        sexo: sexo.text);
                    AddClient(clienModel);
                    nombres.clear();
                    apellidos.clear();
                    email.clear();
                    fecha_nacimiento.clear();
                    departamento.clear();
                    municipio.clear();
                    direccion.clear();
                    dui.clear();
                    telefono.clear();
                    sexo.clear();
                  }
                },
                child: Text("Enviar")),
            SizedBox(height: 30.0),
          ],
        ),
      ),
    );
  }

  _selectDate(BuildContext context) async {
    DateTime? picked = await showDatePicker(
      context: context,
      initialDate: DateTime.now(),
      firstDate: DateTime(2019),
      lastDate: DateTime(2028),
    );

    if (picked != null) {
      setState(() {
        _fecha = picked.toString();
        fecha_nacimiento.text = _fecha;
      });
    }
  }
}
