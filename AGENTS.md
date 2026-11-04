# Reglas del Proyecto (practicapeatepe)

## Stack y Estilo de Código
- **Tecnologías**: HTML plano y PHP básico/nativo sin frameworks ni herramientas de compilación externas, orientado a prácticas educativas.
- **Estructura HTML**: Mantener plantillas HTML simples, legibles y directas (`<html>`, `<head>`, `<body>`), separando las vistas de entrada (`.html`) de los scripts de procesamiento (`.php`) cuando siga el patrón de `frontend/`.
- **Procesamiento de Formularios en PHP**:
  - Usar superglobales nativas de PHP (`$_REQUEST`, `$_POST`, `$_GET`) de forma consistente con los ejercicios prácticos (actualmente `$_REQUEST['campo']`).
  - Los nombres de los atributos `name` en los `<input>` de HTML deben coincidir exactamente con las claves accedidas en PHP y mantenerse en español en minúsculas (ej. `nombre`, `correo`, `telefono`).
- **Idioma**: Todo el texto visible para el usuario, nombres de campos (`name`), `placeholder` y comentarios deben estar en **español**.

