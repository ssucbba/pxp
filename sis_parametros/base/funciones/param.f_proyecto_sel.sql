CREATE OR REPLACE FUNCTION "param"."f_proyecto_sel"(	
				p_administrador integer, p_id_usuario integer, p_tabla character varying, p_transaccion character varying)
RETURNS character varying AS
$BODY$
/**************************************************************************
 SISTEMA:		Parametros Generales
 FUNCION: 		param.f_proyecto_sel
 DESCRIPCION:   Funcion que devuelve conjuntos de registros de las consultas relacionadas con la tabla 'param.tproyecto'
 AUTOR: 		Gonzalo Sarmiento Sejas
 FECHA:	        06-02-2013 17:04:17
 COMENTARIOS:	
***************************************************************************
 HISTORIAL DE MODIFICACIONES:

 DESCRIPCION:	
 AUTOR:			
 FECHA:		
***************************************************************************/

DECLARE

	v_consulta    		varchar;
	v_parametros  		record;
	v_nombre_funcion   	text;
	v_resp				varchar;
			    
BEGIN

	v_nombre_funcion = 'param.f_proyecto_sel';
    v_parametros = pxp.f_get_record(p_tabla);

	/*********************************    
 	#TRANSACCION:  'PM_PROY_SEL'
 	#DESCRIPCION:	Consulta de datos
 	#AUTOR:		Gonzalo Sarmiento Sejas	
 	#FECHA:		06-02-2013 17:04:17
	***********************************/

	if(p_transaccion='PM_PROY_SEL')then
     				
    	begin
    		--Sentencia de la consulta
			v_consulta:='select
						proy.id_proyecto,
						proy.estado_reg,
						proy.hidro,
						proy.id_proyecto_cat_prog,
						proy.codigo_proyecto,
						proy.descripcion_proyecto,
						proy.nombre_proyecto,
						proy.nombre_corto,
						proy.id_proyecto_actif,
						proy.codigo_sisin,
						proy.fecha_reg,
						proy.id_usuario_reg,
						proy.fecha_mod,
						proy.id_usuario_mod,
						usu1.cuenta as usr_reg,
						usu2.cuenta as usr_mod	
						from param.tproyecto proy
						inner join segu.tusuario usu1 on usu1.id_usuario = proy.id_usuario_reg
						left join segu.tusuario usu2 on usu2.id_usuario = proy.id_usuario_mod
				        where  ';
			
			--Definicion de la respuesta
			v_consulta:=v_consulta||v_parametros.filtro;
			v_consulta:=v_consulta||' order by ' ||v_parametros.ordenacion|| ' ' || v_parametros.dir_ordenacion || ' limit ' || v_parametros.cantidad || ' offset ' || v_parametros.puntero;

			--Devuelve la respuesta
			return v_consulta;
						
		end;

	/*********************************    
 	#TRANSACCION:  'PM_PROY_CONT'
 	#DESCRIPCION:	Conteo de registros
 	#AUTOR:		Gonzalo Sarmiento Sejas	
 	#FECHA:		06-02-2013 17:04:17
	***********************************/

	elsif(p_transaccion='PM_PROY_CONT')then

		begin
			--Sentencia de la consulta de conteo de registros
			v_consulta:='select count(id_proyecto)
					    from param.tproyecto proy
					    inner join segu.tusuario usu1 on usu1.id_usuario = proy.id_usuario_reg
						left join segu.tusuario usu2 on usu2.id_usuario = proy.id_usuario_mod
					    where ';
			
			--Definicion de la respuesta		    
			v_consulta:=v_consulta||v_parametros.filtro;

			--Devuelve la respuesta
			return v_consulta;

		end;
					
	else
					     
		raise exception 'Transaccion inexistente';
					         
	end if;
					
EXCEPTION
					
	WHEN OTHERS THEN
			v_resp='';
			v_resp = pxp.f_agrega_clave(v_resp,'mensaje',SQLERRM);
			v_resp = pxp.f_agrega_clave(v_resp,'codigo_error',SQLSTATE);
			v_resp = pxp.f_agrega_clave(v_resp,'procedimientos',v_nombre_funcion);
			raise exception '%',v_resp;
END;
$BODY$
LANGUAGE 'plpgsql' VOLATILE
COST 100;
ALTER FUNCTION "param"."f_proyecto_sel"(integer, integer, character varying, character varying) OWNER TO postgres;
