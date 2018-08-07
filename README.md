# organigrama

oficinas

	id_oficina:integer
	nombre_oficina:string
	id_nodo:integer
	direccion_oficina:string
	id_funcionario: integer
---------------------
nodos

	id_nodo:integer
	nivel:integer
	id_oficina:integer
	id_padre:integer
---------------------
funcionarios

	id_funcionario:integer
	nombre_per:string
	apellido_per:string
	email:string
	facebook:url
	instagram:url
	twitter:url
---------------------