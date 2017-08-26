CREATE DATABASE IF NOT EXISTS Clientes;
USE Clientes;
CREATE TABLE IF NOT EXISTS Customer (
	Guardafango_trasero_derecho VARCHAR(255),
	Maleta VARCHAR(255),
	Parachoque_trasero VARCHAR(255),
	Stops VARCHAR(255),
	Parabrisas_trasero VARCHAR(255),
	Techo VARCHAR(255),
	Puerta_trasera_izquierda VARCHAR(255),
	Puerta_delantera_izquierda VARCHAR(255),
	Paral_de_techo_trasero_izquierdo VARCHAR(255),
	Paral_de_puertas_Izquierdo VARCHAR(255),
	Paral_de_vidrio_delantero_izquierdo VARCHAR(255),
	Capot VARCHAR(255),
	Faros VARCHAR(255),
	Cocuyos_Luces_de_neblina VARCHAR(255),
	Parachoque_delantero VARCHAR(255),
	Puerta_trasera_derecha VARCHAR(255),
	Puerta_delantera_derecha VARCHAR(255),
	Paral_de_techo_trasero_derecho VARCHAR(255),
	Paral_de_puertas_derecho VARCHAR(255),
	Paral_de_vidrio_delantero_derecho VARCHAR(255),
	Parabrisas_delantero VARCHAR(255),
	Rolinera_izquierda VARCHAR(255),
	Rin_izquierdo VARCHAR(255),
	Caucho_izquierdo VARCHAR(255),
	Freno_izquierdo VARCHAR(255),
	Pastilla_izquierda VARCHAR(255),
	Banda_izquierda	VARCHAR(255),
	Bujes_de_meseta_izquierda VARCHAR(255),
	Bujes_de_barra_estabilizadora_lado_izquierdo VARCHAR(255),
	Bujes_de_ballesta_izquierda VARCHAR(255),
	Buje_de_amortiguador_izquierdo VARCHAR(255),
	Espiral_izquierdo VARCHAR(255),
	Amortiguador_izquierdo VARCHAR(255),
	freno_de_emergencia_o_de_mano_izquierdo	VARCHAR(255),
	Rin_derecho VARCHAR(255),
	Bujes_de_meseta_derecha VARCHAR(255),
	Bujes_de_barra_estabilizadora_lado_derecho VARCHAR(255),
	Bujes_de_ballesta_derecha VARCHAR(255),
	Espiral_derecho VARCHAR(255),
	Amortiguador_derecho VARCHAR(255),
	Freno_de_emergencia_o_de_mano_derecho VARCHAR(255),
	Caucho_Derecho VARCHAR(255),
	Freno_Derecho VARCHAR(255),
	Pastilla_Derecha VARCHAR(255),
	Banda_Derecha VARCHAR(255),
	Buje_de_meseta_Derecha VARCHAR(255),
	Buje_de_barra_estabilizadora_Derecha VARCHAR(255),
	Buje_de_Amortiguador_Derecho VARCHAR(255),
	Rolinera_Derecha VARCHAR(255),
	Gomas_de_tripoides_derecho VARCHAR(255),
	Munon_Inferior_Derecho VARCHAR(255),
	Munon_superior_Derecho VARCHAR(255),
	Buje_de_arana_Derecha VARCHAR(255),
	Goma_de_triceta_Derecho VARCHAR(255),
	Terminal_Externo_Derecho VARCHAR(255),
	Terminal_Interno_Rotula_Derecho VARCHAR(255),
	Buje_de_cajetin_de_direccion_Derecha VARCHAR(255),
	Brazo_Loco_Derecho VARCHAR(255),
	Brazo_Pitman_Derecho VARCHAR(255),
	Terminales_de_Barra_Central_Derechos VARCHAR(255),
	Amortiguador_de_Direccion_Derecho VARCHAR(255),
	Terminales_de_barra_estabilizadora_o_papelon_Derecho VARCHAR(255),
	Freno_Izquierdo VARCHAR(255),
	Pastilla_Izquierda VARCHAR(255),
	Banda_Izquierda	VARCHAR(255),
	Buje_de_meseta_Izquierda VARCHAR(255),
	Buje_de_barra_estabilizadora_Izquierdo VARCHAR(255),
	Buje_de_Amortiguador_Izquierdo VARCHAR(255),
	Rolinera_Izquierda VARCHAR(255),
	Gomas_de_tripoides_Izquierdo VARCHAR(255),
	Munon_Inferior_Izquierdo VARCHAR(255),
	Munon_superior_Izquierdo VARCHAR(255),
	Buje_de_arana_Izquierdo VARCHAR(255),
	Goma_de_triceta_Izquierda VARCHAR(255),
	Terminal_Externo_Izquierdo VARCHAR(255),
	Terminal_Interno_Rotula_Izquierdo VARCHAR(255),
	Polvera_cajetin_de_direccion_Izquierda VARCHAR(255),
	Buje_de_cajetin_de_direccion_Izquierdo	VARCHAR(255),
	Brazo_Loco_Izquierdo VARCHAR(255),
	Brazo_Pitman_Izquierdo VARCHAR(255),
	Terminales_de_Barra_Central_Izquierdo VARCHAR(255),
	Amortiguador_de_Direccion_Izquierdo VARCHAR(255),
	Terminales_de_barra_estabilizadora_o_papelon_Izquierdo VARCHAR(255),
	Bases_Inferiores_del_Motor VARCHAR(255),
	Bases_Inferiores_de_Caja VARCHAR(255),
	Base_de_transfer VARCHAR(255),
	Cardan VARCHAR(255),
	Gomas_Flotantes_de_tubo_de_escape VARCHAR(255),
	Tubo_de_escape VARCHAR(255),
	Silenciador VARCHAR(255),
	Convertidor_Catalitico VARCHAR(255),
	Crucetas VARCHAR(255),
	Base_de_Radiador VARCHAR(255),
	Mangueras_de_Enfriamiento VARCHAR(255),
	Botes_de_aceite_de_direccion VARCHAR(255),
	Botes_de_aceite_parte_superior_del_motor VARCHAR(255),
	Correa_de_tiempo VARCHAR(255),
	Presencia_de_aceite_en_el_sistema_de_flujo_de_aire VARCHAR(255),
	Filtro_de_aire VARCHAR(255),
	Bujias VARCHAR(255),
	Compresion_de_cilindros VARCHAR(255),
	Conducto_de_aire VARCHAR(255),
	Conexiones_electricas_del_motor VARCHAR(255),
	Aceite_de_Caja VARCHAR(255),
	Aceite_de_Motor VARCHAR(255),
	Fluido_de_Direccion_Hidraulica VARCHAR(255),
	Liga_de_frenos VARCHAR(255),
	Fuido_de_Clutch VARCHAR(255),
	Refrigerante_o_Fluido_de_enfriamiento VARCHAR(255),
	Sistema_de_Aire_Acondicionado VARCHAR(255),
	Sistema_de_Freno VARCHAR(255),
	Sistema_de_Combustible VARCHAR(255),
	Sistema_de_Direccion_Hidraulica VARCHAR(255),
	Sistema_de_Aire_de_Inyeccion VARCHAR(255),
	Transmision_automatica VARCHAR(255),
	Clutch_Hidraulico_Guaya VARCHAR(255),
	Bujes_y_sistema_de_varillaje_de_transmision_manual VARCHAR(255),
	Seguros_y_alarma VARCHAR(255),
	Maleta VARCHAR(255),
	Alfombras VARCHAR(255),
	Gomas_de_entre_puertas VARCHAR(255),
	Tapiceria_asientos VARCHAR(255),
	Tapiceria_techo VARCHAR(255),
	Paneles_de_las_puertas VARCHAR(255),
	Tablero VARCHAR(255),
	Indicadores_de_luces_en_el_tablero VARCHAR(255),
	Luces_internas VARCHAR(255),
	Limpiaparabrisas_y_surtidor_de_agua VARCHAR(255),
	Luces_de_neblina VARCHAR(255),
	Luces_de_freno VARCHAR(255),
	Luces_altas_y_bajas VARCHAR(255),
	Luces_de_cruce VARCHAR(255),
	Equipo_de_emergencia VARCHAR(255),
	Cinturones_de_seguridad VARCHAR(255),
	Aire_acondicionado VARCHAR(255),
	Codigos_de_Falla VARCHAR(255),
	Golpe_de_acople_de_caja_de_cambios VARCHAR(255),
	Estado_de_Clutch_y_transmision_manual VARCHAR(255),
	Funcionamiento_de_Tripoides VARCHAR(255),
	Funcionamiento_de_Tricetas VARCHAR(255),
	Funcionamiento_de_suspension VARCHAR(255),
	Funcionamiento_de_Rolineras VARCHAR(255),
	Sistema_de_Cambios VARCHAR(255),
	Fuerza VARCHAR(255),
	Potencia VARCHAR(255),
	Entonacion VARCHAR(255),
	Camber_Chaster_y_Convergencia VARCHAR(255),
	Presencia_de_ruidos VARCHAR(255)
);