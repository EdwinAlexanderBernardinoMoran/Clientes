// ignore_for_file: prefer_const_constructors

import 'package:appclientes/components/date.dart';
import 'package:appclientes/components/formulario.dart';
import 'package:flutter/material.dart';

class Agregar_Editar_clients extends StatefulWidget {
  const Agregar_Editar_clients({super.key});

  @override
  State<Agregar_Editar_clients> createState() => _Agregar_Editar_clientsState();
}

// ignore: camel_case_types
class _Agregar_Editar_clientsState extends State<Agregar_Editar_clients> {
  TextEditingController nombres = TextEditingController();
  TextEditingController apellidos = TextEditingController();
  TextEditingController fecha = TextEditingController();

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
                child: Column(
              children: [
                MyTextFields(
                    texto: "Nombres",
                    labeltexto: "Escribe tu nombre",
                    Inputcontroller: nombres),
                SizedBox(height: 30.0),
                MyTextFields(
                    texto: "Apellidos",
                    labeltexto: "Escribe tus apellidos",
                    Inputcontroller: apellidos),
                SizedBox(height: 30.0),
                MyTextDate(
                  labeltexto: "Fecha",
                  Inputcontrollerdate: fecha,
                ),
              ],
            ))
          ],
        ),
      ),
    );
  }
}
