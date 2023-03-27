import 'package:flutter/material.dart';

class MyTextDate extends StatelessWidget {
  const MyTextDate(
      {super.key, required this.labeltexto, required this.Inputcontrollerdate});

  final String labeltexto;
  final TextEditingController Inputcontrollerdate;

  @override
  Widget build(BuildContext context) {
    return TextField(
      enableInteractiveSelection: false,
      controller: Inputcontrollerdate,
      decoration: InputDecoration(
          border: OutlineInputBorder(borderRadius: BorderRadius.circular(20.0)),
          hintText: "Escirba su fecha de naciemiento aquí",
          labelText: labeltexto,
          helperText: "Escriba la fecha de nacimiento solamente ",
          suffixIcon: Icon(Icons.calendar_today),
          icon: Icon(Icons.lock)),
      onTap: () {
        FocusScope.of(context).requestFocus(new FocusNode());
        _selectDate(context);
      },
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
        _textController.text = fecha;
      });
    }
  }
}
