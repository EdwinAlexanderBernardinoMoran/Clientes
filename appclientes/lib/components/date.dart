import 'package:flutter/material.dart';

class MyTextDate extends StatelessWidget {
  const MyTextDate(
      {super.key,
      required this.texto,
      required this.labeltexto,
      // ignore: non_constant_identifier_names
      required this.Inputcontrollerdate});

  final String texto;
  final String labeltexto;
  final TextEditingController Inputcontrollerdate;

  @override
  Widget build(BuildContext context) {
    return Padding(
        padding: const EdgeInsets.symmetric(horizontal: 20.0),
        child: TextFormField(
          controller: Inputcontrollerdate,
          // validator: (value) {
          //   if (value!.isEmpty) {
          //     return "$labeltexto es requerido";
          //   }
          // },
          enableInteractiveSelection: false,
          decoration: InputDecoration(
              border:
                  OutlineInputBorder(borderRadius: BorderRadius.circular(20.0)),
              hintText: texto,
              labelText: labeltexto,
              suffixIcon: Icon(Icons.perm_contact_calendar),
              icon: Icon(Icons.calendar_today)),
          onTap: () {
            FocusScope.of(context).requestFocus(new FocusNode());
            _selectDate(context);
          },
        ));
  }

  _selectDate(BuildContext context) async {
    DateTime? picked = await showDatePicker(
      context: context,
      initialDate: DateTime.now(),
      firstDate: DateTime(2019),
      lastDate: DateTime(2028),
    );
    //
  }
}
