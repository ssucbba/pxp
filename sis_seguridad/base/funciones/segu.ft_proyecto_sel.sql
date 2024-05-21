CREATE OR REPLACE FUNCTION segu.ft_proyecto_sel (
  p_administrador integer,
  p_id_usuario integer,
  p_tabla character varying,
  p_transaccion character varying
)
RETURNS varchar
AS 
$body$
/**************************************************************************
 SISTEMA:		Sistema de Seguridad
 FUNCION: 		segu.ft_proyecto_sel
 DESCRIPCION:   Funcion que devuelve conjuntos de registros de las consultas relacionadas con la tabla 'segu.tproyecto'
 AUTOR: 		 (w)
 FECHA:	        17-10-2011 06:35:44
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

	v_nombre_funcion = 'segu.ft_proyecto_sel';
    v_parametros = pxp.f_get_record(p_tabla);

	/*********************************
 	#TRANSACCION:  'SG_PROY_SEL'
 	#DESCRIPCION:	Consulta de datos
 	#AUTOR:		w	
 	#FECHA:		17-10-2011 06:35:44
	***********************************/

	if(p_transaccion='SG_PROY_SEL')then
     				
    	begin
    		--Sentencia de la consulta
			v_consulta:='select
						proy.id_proyecto,
						proy.codigo,
						proy.descripcion,
						proy.estado_reg,
						proy.nombre,
						proy.fecha_reg,
						proy.id_usuario_reg,
						proy.fecha_mod,
						proy.id_usuario_mod,
						usu1.cuenta as usr_reg,
						usu2.cuenta as usr_mod	
						from segu.tproyecto proy
						inner join segu.tusuario usu1 on usu1.id_usuario = proy.id_usuario_reg
						left join segu.tusuario usu2 on usu2.id_usuario = proy.id_usuario_mod
				        where  ';
			
			--Definicion de la respuesta
			v_consulta:=v_consulta||v_parametros.filtro;
			
			if(pxp.f_existe_parametro(p_tabla,'estado_reg')) then
			  v_consulta:=v_consulta || ' and proy.estado_reg='''||v_parametros.estado_reg||'''';
			end if;
			
			v_consulta:=v_consulta||' order by ' ||v_parametros.ordenacion|| ' ' || v_parametros.dir_ordenacion || ' limit ' || v_parametros.cantidad || ' offset ' || v_parametros.puntero;

			--Devuelve la respuesta
			return v_consulta;
						
		end;

	/*********************************
 	#TRANSACCION:  'SG_PROY_CONT'
 	#DESCRIPCION:	Conteo de registros
 	#AUTOR:		w	
 	#FECHA:		17-10-2011 06:35:44
	***********************************/

	elsif(p_transaccion='SG_PROY_CONT')then

		begin
			--Sentencia de la consulta de conteo de registros
			v_consulta:='select count(id_proyecto)
					    from segu.tproyecto proy
					    inner join segu.tusuario usu1 on usu1.id_usuario = proy.id_usuario_reg
						left join segu.tusuario usu2 on usu2.id_usuario = proy.id_usuario_mod
					    where ';
			
			--Definicion de la respuesta		
			v_consulta:=v_consulta||v_parametros.filtro;
			
            if(pxp.f_existe_parametro(p_tabla,'estado_reg')) then
			  v_consulta:=v_consulta || ' and proy.estado_reg='''||v_parametros.estado_reg||'''';
			end if;
			
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
$body$
    LANGUAGE plpgsql;
--
-- Definition for function ft_regional_ime (OID = 305087) : 
--
