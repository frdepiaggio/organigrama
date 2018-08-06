# organigrama

cargos

	id:integer
	nombre:string
	id_nodo:integer
	direccion_oficina:string
---------------------
nodos

	id_nodo:integer
	nombre:string
	nivel:integer
	id_cargo:integer
	id_persona:integer
	id_padre:integer
---------------------
personas

	id_persona:integer
	nombre:string
	apellido:string
	email:string
	facebook:url
	instagram:url
	twitter:url
---------------------