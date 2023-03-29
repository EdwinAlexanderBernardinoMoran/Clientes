import 'dart:convert';

import 'package:http/http.dart' as http;
import 'package:appclientes/models/clients_model.dart';

class ClientController {
  static const VIEW_URL = "http://127.0.0.1:8000/api/v1/cliente";
  static const CREATE_URL = "http://127.0.0.1:8000/api/v1/cliente";

  List<clientModel> clientsFromJson(String jsonstring) {
    final data = json.decode(jsonstring);
    return List<clientModel>.from(
        data.map((item) => clientModel.fromJson(item)));
  }

  // Metodo de Obtener todos los clientes
  Future<List<clientModel>> getClients() async {
    String direcctionIp = "http://127.0.0.1:8000/api/v1/cliente";
    final response = await http.get(Uri.parse(VIEW_URL));

    if (response.statusCode == 200) {
      List<clientModel> list = clientsFromJson(response.body);
      return list;
    } else {
      return <clientModel>[];
    }
  }

  // Metodo para Insertar Empleados.
  Future<String> addClient(clientModel clienteModel) async {
    final response =
        await http.post(Uri.parse(CREATE_URL), body: clienteModel.toJsonAdd());
    if (response.statusCode == 200) {
      return response.body;
    } else {
      return "Error";
    }
  }

  // ignore: non_constant_identifier_names
  Future<String> DeleteClient(clientModel clientModel) async {
    final response = await http.delete(
        Uri.parse("http://127.0.0.1:8000/api/v1/cliente/${clientModel.id}"),
        body: clientModel.toJsonDelete_and_Update());
    if (response.statusCode == 200) {
      return response.body;
    } else {
      return "Error";
    }
  }
}
