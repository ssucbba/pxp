CREATE OR REPLACE FUNCTION segu.ftrig_tgui_rol (
)
RETURNS trigger AS
$body$
DECLARE
  
BEGIN
  	IF (TG_OP='UPDATE')then
	BEGIN
    	NEW.modificado = NULL;
        return NEW;
    END;
    END IF;
END;
$body$
LANGUAGE 'plpgsql'
VOLATILE
CALLED ON NULL INPUT
SECURITY INVOKER;