// ignore: camel_case_types
// ignore_for_file: prefer_typing_uninitialized_variables, non_constant_identifier_names

// ignore: camel_case_types
class clientModel {
  final nombres;
  final apellidos;
  final email;
  final fecha_nacimiento;
  final departamento;
  final municipio;
  final direccion;
  final dui;
  final telefono;
  final sexo;

  clientModel(
      {this.nombres,
      this.apellidos,
      this.email,
      this.fecha_nacimiento,
      this.departamento,
      this.municipio,
      this.direccion,
      this.dui,
      this.telefono,
      this.sexo});

  factory clientModel.fromJson(Map<String, dynamic> json) {
    return clientModel(
      nombres: json['nombres'],
      apellidos: json['apellidos'],
      email: json['email'],
      fecha_nacimiento: json['fecha_nacimiento'],
      departamento: json['departamento'],
      municipio: json['municipio'],
      direccion: json['direccion'],
      dui: json['dui'],
      telefono: json['telefono'],
      sexo: json['sexo'],
    );
  }
}
