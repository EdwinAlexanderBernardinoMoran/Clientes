import 'dart:convert';

import 'package:http/http.dart' as http;
import 'package:appclientes/models/clients_model.dart';

class ClientController {
  List<clientModel> clientsFromJson(String jsonstring) {
    final data = json.decode(jsonstring);
    return List<clientModel>.from(
        data.map((item) => clientModel.fromJson(item)));
  }

  Future<List<clientModel>> getClients() async {
    String direcctionIp = "http://127.0.0.1:8000/api/v1/cliente";
    final response = await http.get(Uri.parse(direcctionIp));

    if (response.statusCode == 200) {
      List<clientModel> list = clientsFromJson(response.body);
      return list;
    } else {
      return <clientModel>[];
    }
  }
}
