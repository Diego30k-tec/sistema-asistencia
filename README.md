## 1. Descripcion del negocio
Nombre: Bodega Monica <br>
Tamaño: Pequeña empresa, operacion individual o familiar <br>
Contexto: Negocio muy comun en el Peru en el cual compran productos de primera
necesidad (alimentos, limpieza, bebidas) al por mayor
para venderlos por unidad al consumidor final. <br>
Justificacion: Se necesita un sistema digital que faciliter sumar el monto de la venta que hasta ahoras se realiza de forma manual un cuaderno, para asi evitar errores al monto que el cliente haga su compra.

## 2. Identificar el problema y la solución
El negocio opera de forma manual a travez del uso de un cuaderno. Esto genera tres problemas:
Problema <br>
- Pérdida de dinero: Los "fiados" se olvidan, se anotan mal o el papel se pierde.
- El stock: El negocio no sabe que se acabó la leche hasta que un cliente se lo pide y no hay.
- Ineficiencia: Tardar demasiado en buscar precios o calcular totales en horas pico.
![Problema](https://github.com/Diego30k-tec/bodega_monica/blob/main/public/image/IMG_20260611_122114.jpg.jpeg)
La Solución <br>
Un sistema de gestión centralizado que automatice el control de inventario y vincule las ventas directamente <br>
con un historial de deudas por cliente, haciendo que cada producto este registrado.<br>

### Causas
- Ausencia de una herramienta digital centralizada para marcar asistencia
- Los registros en papel se pierden, deterioran o se alteran fácilmente
- No existe diferenciación de roles entre quién administra y quién solo consulta
- Es imposible generar reportes históricos de forma automática

### Efectos
- Pérdida económica por pago incorrecto de horas trabajadas
- Incapacidad de detectar patrones de ausentismo a tiempo
- Mayor carga operativa para el área de Recursos Humanos

### Solución Propuesta

Desarrollar una aplicación web con **PHP + POO + MVC** que permita:

- Autenticar usuarios con roles diferenciados (administrador / empleado)
- Registrar asistencia con fecha y hora exactas usando PDO y MariaDB
- Gestionar el catálogo de empleados y departamentos (CRUD completo)
- Consultar y filtrar el historial de asistencias por empleado y fecha
- Visualizar un dashboard con el estado de asistencia del día en curso
- 
## 3. Preanálisis

### Necesidades Identificadas
- Digitalizar el catálogo de productos y precios.
- Llevar un registro histórico de quién debe, cuánto debe y cuándo compró.
- Reducir el tiempo de atención al cliente en el mostrador.

### Estudio de Viabilidad
- Operativa: Siempre que la interfaz sea minimalista y diseñada para alguien que no es experto en computación
- Económica: Altamente viable. El uso de software open source (Apache, MySQL) reduce los costos de licencia a cero.

#### Viabilidad Técnica
- PHP 8+ disponible en prácticamente cualquier servidor web
- MariaDB es un gestor gratuito, robusto y ampliamente documentado
- Apache con `mod_rewrite` disponible en XAMPP para desarrollo local
- La POO permite estructurar el sistema con clases, herencia y encapsulamiento
- El patrón MVC está documentado en [`CONCEPTS.md`](./CONCEPTS.md)

#### Viabilidad Económica
- Stack completamente open source y gratuito (PHP, MariaDB, Apache, Git)
- Entorno de desarrollo levantable localmente con XAMPP sin costo
- No se requieren licencias de software adicionales

#### Viabilidad Operacional
- Los usuarios solo necesitan un navegador web para acceder
- Administrable de forma remota una vez desplegado
- La separación en módulos facilita la capacitación del personal

### Alcance del Sistema

#### Dentro del alcance
- Autenticación con sesiones PHP y roles (administrador / empleado)
- Módulo de empleados: CRUD completo
- Dashboard con resumen de asistencias del día
- Layouts reutilizables (header, footer, navbar) — principio DRY

#### Fuera del alcance
- Integración con dispositivos biométricos
- Módulo de nómina o cálculo de salarios
- Aplicación móvil nativa (iOS / Android)
- Notificaciones por correo o SMS
- Integración con sistemas ERP externos

---

## 4. Análisis de Requisitos

### 4.1 Requisitos Funcionales
| Codigo | Descripcion |
|---|---|
| RF01 | El sistema debe permitir agregar, editar y eliminar productos. |
| RF02 | El sistema debe calcular el total y descontar stock al realizar una venta.|
| RF03 | El sistema debe permitir elegir entre pago en "Efectivo" o "Fiado" |
| RF04 | El sistema debe permitir asignar una venta como "pendiente" a un cliente específico. |
| RF05 | El sistema debe registrar ventas seleccionando productos y calculando el total automáticamente |
### 4.2 Requisitos No Funcionales
| Codigo | Tipo | Descripcion |
|---|---|---|
| RNF01 | Rendimiento | El sistema debe procesar el registro de una venta y generar la respuesta en menos de 2 segundos. |
| RNF02 | Usabilidad | La interfaz debe ser simple y fácil de usar, pensada para una navegación rápida |
| RNF03 | Seguridad | El sistema debe requerir un usuario y contraseña para acceder a la gestión de inventario y deudas. |
| RNF03 | Seguridad | El sistema debe ser accesible desde cualquier navegador web moderno |
## Stack Tecnológico

| Capa | Tecnología |
|---|---|
| **Backend** | PHP 8+ — POO (Programación Orientada a Objetos) — MVC desde cero |
| **Base de datos** | MariaDB — PDO (PHP Data Objects) con prepared statements |
| **Frontend** | HTML5, CSS3, JavaScript — Vistas PHP con layouts reutilizables |
| **Servidor web** | Apache — Reescritura de URLs vía `.htaccess` |
| **Control de versiones** | Git + GitHub |
| **Configuración** | Variables de entorno (`.env`) para credenciales |
---

## Arquitectura del Proyecto

El sistema aplica **POO** y **MVC** implementado desde cero. Los 4 pilares de POO en el proyecto:

### Flujo de una Petición


### Estructura del Proyecto

## Instalación

### Requisitos previos
- PHP 8+
- Servidor web local o hosting
- MariaDB / MySQL

### Pasos

```bash
# 1. Clonar el repositorio
git clone https://github.com/ojitoslanda/employee-attendance-system.git
cd employee-attendance-system

# 2. Configurar variables de entorno
cp .env.example .env
# Editar .env con tus credenciales de base de datos

# 3. Crear la base de datos


# 4. Apuntar el servidor web a la carpeta public/

```

## TRELLO
[mi tablero de trello](https://trello.com/b/YnIg8VUR/bodega-monica)
![TRELLO](recursos/Trello.png)


### DIAGRAMA DE FIGMA UI/UX

## Base de datos
```sql
create database senai_asistencia;
use senai_asistencia;


create table cargo (
id_cargo int auto_increment primary key,
nombre_cargo varchar(50) not null
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

create table empleado(
id_empleado int primary key auto_increment,
nombre varchar(100) not null,
apellido varchar(100) not null,
dni varchar(8) unique not null,
celular varchar(20),
correo varchar (100) not null unique,
id_cargo int not null,
fecha_registro timestamp default current_timestamp,
foreign key (id_cargo) references cargo(id_cargo)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

create table usuario(
id_usuario int auto_increment primary key,
roles enum('admin', 'superadmin') default 'admin',
nombre_usuario varchar (150) not null,
clave varchar(250) not null
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

create table asistencia(
id_asistencia int auto_increment primary key,
fecha date not null,
hora_entrada timestamp default current_timestamp not null,
hora_salida timestamp default current_timestamp not null,
estado enum('asistio', 'tardanza', 'falto') default 'falto' not null,
id_empleado int not null,
foreign key (id_empleado) references empleado(id_empleado) ON DELETE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
```

### Diagrama Entidad-Relacion (DER)
Falta integrar

 
### Modelo Relacional (MR)
![MODELO_RELACIONAL](https://raw.githubusercontent.com/ojitoslanda/testing/refs/heads/master/img/db.png)

### Cardinalidades

Las cardinalidades describen cuántos registros de una tabla se relacionan con cuántos de otra.

**cargo → empleado (1:N)**
Un cargo puede estar asignado a muchos empleados.
Un empleado solo puede tener un cargo.
```
cargo (1) -----< empleado (N)
```

**empleado → asistencia (1:N)**
Un empleado puede tener muchos registros de asistencia (uno por día).
Cada registro de asistencia pertenece a un solo empleado.
```
empleado (1) -----< asistencia (N)
```

**usuario**
La tabla usuario es independiente. No se relaciona con empleado ni con asistencia.
Representa las cuentas de acceso al sistema (administradores), no a los empleados.

![Sistema Instalado](https://github.com/Diego30k-tec/bodega_monica/blob/main/public/image/IMG_20260611_121904.jpg.jpeg)


