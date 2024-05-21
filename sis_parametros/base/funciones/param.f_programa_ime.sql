--------------- SQL ---------------

CREATE OR REPLACE FUNCTION param.f_programa_ime (
  p_administrador integer,
  p_id_usuario integer,
  p_tabla varchar,
  p_transaccion varchar
)
RETURNS varchar AS
$body$
/**************************************************************************
 SISTEMA:		Parametros Generales
 FUNCION: 		param.f_programa_ime
 DESCRIPCION:   Funcion que gestiona las operaciones basicas (inserciones, modificaciones, eliminaciones de la tabla 'param.tprograma'
 AUTOR: 		Gonzalo Sarmiento Sejas
 FECHA:	        05-02-2013 23:53:40
 COMENTARIOS:	
***************************************************************************
 HISTORIAL DE MODIFICACIONES:

 DESCRIPCION:	
 AUTOR:			
 FECHA:		
***************************************************************************/

DECLARE

	v_nro_requerimiento    	integer;
	v_parametros           	record;
	v_id_requerimiento     	integer;
	v_resp		            varchar;
	v_nombre_funcion        text;
	v_mensaje_error         text;
	v_id_programa	integer;
			    
BEGIN

    v_nombre_funcion = 'param.f_programa_ime';
    v_parametros = pxp.f_get_record(p_tabla);

	/*********************************    
 	#TRANSACCION:  'PM_PROG_INS'
 	#DESCRIPCION:	Insercion de registros
 	#AUTOR:		Gonzalo Sarmiento Sejas	
 	#FECHA:		05-02-2013 23:53:40
	***********************************/

	if(p_transaccion='PM_PROG_INS')then
					
        begin
        	--Sentencia de la insercion
        	insert into param.tprograma(
			estado_reg,
			nombre_programa,
			
			codigo_programa,
			descripcion_programa,
			fecha_reg,
			id_usuario_reg,
			fecha_mod,
			id_usuario_mod
          	) values(
			'activo',
			v_parametros.nombre_programa,
			
			v_parametros.codigo_programa,
			v_parametros.descripcion_programa,
			now(),
			p_id_usuario,
			null,
			null
							
			)RETURNING id_programa into v_id_programa;
			
			--Definicion de la respuesta
			v_resp = pxp.f_agrega_clave(v_resp,'mensaje','Programa almacenado(a) con exito (id_programa'||v_id_programa||')'); 
            v_resp = pxp.f_agrega_clave(v_resp,'id_programa',v_id_programa::varchar);

            --Devuelve la respuesta
            return v_resp;

		end;

	/*********************************    
 	#TRANSACCION:  'PM_PROG_MOD'
 	#DESCRIPCION:	Modificacion de registros
 	#AUTOR:		Gonzalo Sarmiento Sejas	
 	#FECHA:		05-02-2013 23:53:40
	***********************************/

	elsif(p_transaccion='PM_PROG_MOD')then

		begin
			--Sentencia de la modificacion
			update param.tprograma set
			nombre_programa = v_parametros.nombre_programa,
			
			codigo_programa = v_parametros.codigo_programa,
			descripcion_programa = v_parametros.descripcion_programa,
			fecha_mod = now(),
			id_usuario_mod = p_id_usuario
			where id_programa=v_parametros.id_programa;
               
			--Definicion de la respuesta
            v_resp = pxp.f_agrega_clave(v_resp,'mensaje','Programa modificado(a)'); 
            v_resp = pxp.f_agrega_clave(v_resp,'id_programa',v_parametros.id_programa::varchar);
               
            --Devuelve la respuesta
            return v_resp;
            
		end;

	/*********************************    
 	#TRANSACCION:  'PM_PROG_ELI'
 	#DESCRIPCION:	Eliminacion de registros
 	#AUTOR:		Gonzalo Sarmiento Sejas	
 	#FECHA:		05-02-2013 23:53:40
	***********************************/

	elsif(p_transaccion='PM_PROG_ELI')then

		begin
			--Sentencia de la eliminacion
			delete from param.tprograma
            where id_programa=v_parametros.id_programa;
               
            --Definicion de la respuesta
            v_resp = pxp.f_agrega_clave(v_resp,'mensaje','Programa eliminado(a)'); 
            v_resp = pxp.f_agrega_clave(v_resp,'id_programa',v_parametros.id_programa::varchar);
              
            --Devuelve la respuesta
            return v_resp;

		end;
         
	else
     
    	raise exception 'Transaccion inexistente: %',p_transaccion;

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
LANGUAGE 'plpgsql'
VOLATILE
CALLED ON NULL INPUT
SECURITY INVOKER
COST 100;