import 'package:flutter/material.dart';

class MyTextFields extends StatelessWidget {
  MyTextFields(
      {super.key,
      required this.texto,
      required this.labeltexto,
      required this.Inputcontroller});

  final String texto;
  final String labeltexto;
  final TextEditingController Inputcontroller;

  @override
  Widget build(BuildContext context) {
    return Padding(
      padding: const EdgeInsets.symmetric(horizontal: 20.0),
      child: TextFormField(
        controller: Inputcontroller,
        validator: (value) {
          if (value!.isEmpty) {
            return "$labeltexto es requerido";
          }
        },
        decoration: InputDecoration(
          hintText: texto,
          labelText: labeltexto,
          enabledBorder: OutlineInputBorder(
              borderSide: BorderSide(width: 3, color: Colors.blueAccent)),
          focusedBorder: OutlineInputBorder(
              borderSide: BorderSide(width: 3, color: Colors.blueAccent)),
          errorBorder: OutlineInputBorder(
              borderSide: BorderSide(width: 3, color: Colors.red)),
          focusedErrorBorder: OutlineInputBorder(
              borderSide: BorderSide(width: 3, color: Colors.red)),
        ),
      ),
    );
  }
}
