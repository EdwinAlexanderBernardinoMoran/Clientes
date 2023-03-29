import 'package:flutter/material.dart';

class MyTextFields extends StatelessWidget {
  MyTextFields(
      {super.key,
      required this.texto,
      required this.labeltexto,
      required this.icon,
      required this.icon2,
      required this.Inputcontroller});

  final String texto;
  final String labeltexto;
  final Icon icon;
  final Icon icon2;
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
            border:
                OutlineInputBorder(borderRadius: BorderRadius.circular(20.0)),
            hintText: texto,
            labelText: labeltexto,
            suffixIcon: icon,
            icon: icon2,
          ),
        ));
  }
}
