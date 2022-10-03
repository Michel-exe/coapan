<?php
    include("../php/validarSesion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Dashboard</title>
</head>
<body>
    <?php
        include("../components/header.php");
        include("../components/search.php");
    ?>
    <div class="dash">
        <main>
            <!-- <div>
                <h2>Toma</h2>
                <span>
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256.352 93.28c-65.93 0-125.644 4.402-168.39 11.402-21.374 3.5-38.557 7.704-49.683 12.01-5.563 2.155-9.59 4.392-11.624 6.02-.637.51-.72.65-.95.897.23.245.312.39.95.9 2.034 1.627 6.06 3.864 11.623 6.017 11.125 4.307 28.308 8.512 49.68 12.012 42.748 7 102.46 11.4 168.392 11.4 65.93 0 125.643-4.4 168.39-11.4 21.374-3.5 38.557-7.706 49.682-12.013 5.562-2.153 9.587-4.39 11.62-6.017.64-.51.723-.655.952-.9-.23-.247-.313-.39-.95-.9-2.035-1.626-6.06-3.863-11.622-6.017-11.125-4.307-28.308-8.512-49.682-12.01-42.747-7-102.46-11.404-168.39-11.404zm-.352 9.183a163.82 16.505 0 0 1 92.246 2.867v27.258A163.82 16.505 0 0 1 256 135.473 163.82 16.505 0 0 1 92.182 118.97 163.82 16.505 0 0 1 256 102.462zm110.246 4.322a163.82 16.505 0 0 1 53.572 12.184 163.82 16.505 0 0 1-53.572 12.182v-24.367zM25 144.395v106.216h.154v8.585c.015-.522.326.768 3.977 2.98 4.275 2.587 11.744 5.63 21.66 8.442 3.438.976 7.193 1.93 11.21 2.862V155.956c-11.84-2.584-21.97-5.45-30.22-8.644-2.423-.94-4.67-1.905-6.78-2.917zm462 .337c-1.905.89-3.923 1.746-6.078 2.58-13.184 5.104-31.178 9.373-53.272 12.99-44.187 7.236-104.57 11.64-171.298 11.64-60.444 0-115.64-3.622-158.352-9.68V280.08c11.88 1.733 24.956 3.294 39.1 4.63 73.627 6.96 164.876 6.96 238.504 0 36.813-3.48 66.478-8.47 86.308-14.093 9.915-2.812 17.386-5.855 21.66-8.443 1.945-1.178 2.918-2.08 3.428-2.604V144.732zM48 288.514V496h38V296.46c-14.57-2.36-27.292-5.02-38-7.946zm416 .19c-21.43 5.786-50.79 10.532-86.703 13.927-75.007 7.092-166.884 7.092-241.89 0-4.578-.432-9.045-.89-13.407-1.364V496h342V288.705z"></path></svg>
                </span>
                <nav>
                    <a href="Toma.php">Agregar Toma</a>
                    <a href="Toma.php">Suspender Toma</a>
                    <a href="Toma.php">Reactivar Toma</a>
                </nav>
            </div>
            <div>
                <h2>Servicios</h2>
                <span>
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M487.4 315.7l-42.6-24.6c4.3-23.2 4.3-47 0-70.2l42.6-24.6c4.9-2.8 7.1-8.6 5.5-14-11.1-35.6-30-67.8-54.7-94.6-3.8-4.1-10-5.1-14.8-2.3L380.8 110c-17.9-15.4-38.5-27.3-60.8-35.1V25.8c0-5.6-3.9-10.5-9.4-11.7-36.7-8.2-74.3-7.8-109.2 0-5.5 1.2-9.4 6.1-9.4 11.7V75c-22.2 7.9-42.8 19.8-60.8 35.1L88.7 85.5c-4.9-2.8-11-1.9-14.8 2.3-24.7 26.7-43.6 58.9-54.7 94.6-1.7 5.4.6 11.2 5.5 14L67.3 221c-4.3 23.2-4.3 47 0 70.2l-42.6 24.6c-4.9 2.8-7.1 8.6-5.5 14 11.1 35.6 30 67.8 54.7 94.6 3.8 4.1 10 5.1 14.8 2.3l42.6-24.6c17.9 15.4 38.5 27.3 60.8 35.1v49.2c0 5.6 3.9 10.5 9.4 11.7 36.7 8.2 74.3 7.8 109.2 0 5.5-1.2 9.4-6.1 9.4-11.7v-49.2c22.2-7.9 42.8-19.8 60.8-35.1l42.6 24.6c4.9 2.8 11 1.9 14.8-2.3 24.7-26.7 43.6-58.9 54.7-94.6 1.5-5.5-.7-11.3-5.6-14.1zM256 336c-44.1 0-80-35.9-80-80s35.9-80 80-80 80 35.9 80 80-35.9 80-80 80z"></path></svg>
                </span>
                <nav>
                    <a href="pipa.php">Ordenar Pipa de Agua</a>
                </nav>
            </div>
            <div>
                <h2>Modificar</h2>
                <span>
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke-width="2" d="M14,4 L20,10 L14,4 Z M22.2942268,5.29422684 C22.6840146,5.68401459 22.6812861,6.3187139 22.2864907,6.71350932 L9,20 L2,22 L4,15 L17.2864907,1.71350932 C17.680551,1.319449 18.3127724,1.31277239 18.7057732,1.70577316 L22.2942268,5.29422684 Z M3,19 L5,21 M7,17 L15,9"></path></svg>
                </span>
                <nav>
                    <a href="#">Recibo</a>
                    <a href="notificacion.php">Notificacion</a>
                    <a href="#cuota" class="cuotaLink">Cuota</a>
                </nav>
            </div> -->
        <?php if($_SESSION['admin']==="true"){ ?>
            <div>
                <h2>Reportes</h2>
                <span>
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"></path><path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"></path></svg>
                    </span>
                <nav>
                    
                    <section>
                        <a href="#">Clasificacion de atrasos</a>
                        <a href="#">Rangos de adeudo</a>
                    </section>
                    <section>
                        <a href="#">Recaudacion clasificada</a>
                    </section>
                    <section>
                        <a href="./editPDFs/reciboDeCobro.php">Editar Recibo</a>
                        <a href="./editPDFs/notificacion.php">Editar Notificacion</a>
                    </section>
                    <section>
                        <a href="#">Informe para SPF</a>
                        <a href="#">Informe para OFS</a>
                    </section>
                    <section>
                        <a href="#">Subsidios y descuentos</a>
                    </section>
                    
                </nav>
            </div>
        <?php } ?>
            <!-- <div>
                <h2>Reportes</h2>
                <span>
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"></path><path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"></path></svg>
                    </span>
                <nav>
                    
                    <section>
                        <a href="#">Clasificacion de atrasos</a>
                        <a href="#">Rangos de adeudo</a>
                    </section>
                    <section>
                        <a href="#">Recaudacion clasificada</a>
                        
                    </section>
                    <section>
                        <a href="#">Informe para SPF</a>
                        <a href="#">Informe para OFS</a>
                    </section>
                    <section>
                        <a href="#">Subsidios y descuentos</a>
                    </section>
                    
                </nav>
            </div> -->
            <div>
                <h2>Caja</h2>
                <span>
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M4.98 1a.5.5 0 0 0-.39.188L1.54 5H6a.5.5 0 0 1 .5.5 1.5 1.5 0 0 0 3 0A.5.5 0 0 1 10 5h4.46l-3.05-3.812A.5.5 0 0 0 11.02 1H4.98zm9.954 5H10.45a2.5 2.5 0 0 1-4.9 0H1.066l.32 2.562A.5.5 0 0 0 1.884 9h12.234a.5.5 0 0 0 .496-.438L14.933 6zM3.809.563A1.5 1.5 0 0 1 4.981 0h6.038a1.5 1.5 0 0 1 1.172.563l3.7 4.625a.5.5 0 0 1 .105.374l-.39 3.124A1.5 1.5 0 0 1 14.117 10H1.883A1.5 1.5 0 0 1 .394 8.686l-.39-3.124a.5.5 0 0 1 .106-.374L3.81.563zM.125 11.17A.5.5 0 0 1 .5 11H6a.5.5 0 0 1 .5.5 1.5 1.5 0 0 0 3 0 .5.5 0 0 1 .5-.5h5.5a.5.5 0 0 1 .496.562l-.39 3.124A1.5 1.5 0 0 1 14.117 16H1.883a1.5 1.5 0 0 1-1.489-1.314l-.39-3.124a.5.5 0 0 1 .121-.393zm.941.83.32 2.562a.5.5 0 0 0 .497.438h12.234a.5.5 0 0 0 .496-.438l.32-2.562H10.45a2.5 2.5 0 0 1-4.9 0H1.066z"></path></svg>
                </span>
                <nav>
                    <section>
                        <a href="#">Referencias para contratos</a>
                        <a href="#">Referencias para otros Servicios</a>
                        
                    </section>
                    <section>
                        <a href="#">Consulta de referencias</a>
                        <a href="#">Consulta de movimientos pagados</a>
                    </section>
                    
                    <section>
                        <a href="#">Reeinprecion de recibos de contratos</a>
                        <a href="#">Reeinprecion de recibos de otros servicios</a>
                    </section>
                    <section>
                        <a href="#">Cancelación de recibos</a>
                        
                    </section>
                    <section>
                        <a href="#">Corte de caja</a>
                    </section>
                    <section>
                        <a href="#">Consulta de recibos</a>
                        
                    </section>
                </nav>
            </div>
            <div>
                <h2>Cortes</h2>
                <span>
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke-width="2" d="M16,16 C16,14.8954305 12.8659932,14 9,14 C5.13400675,14 2,14.8954305 2,16 C2,17.1045695 5.13400675,18 9,18 C12.8659932,18 16,17.1045695 16,16 Z M2,16 L2,20.9367547 C2,22.0762536 5.13400675,23 9,23 C12.8659932,23 16,22.0762537 16,20.9367548 L16,16 M9,5 C4.581722,5 1,5.8954305 1,7 C1,8.1045695 4.581722,9 9,9 M1,7 L1,12.0000002 C1,13.0128881 4.581722,14 9,14 M23,4 C23,2.8954305 19.9004329,2 16.0769231,2 C12.2534133,2 9.15384615,2.8954305 9.15384615,4 C9.15384615,5.1045695 12.2534133,6 16.0769231,6 C19.9004329,6 23,5.1045695 23,4 Z M16,16 C19.8235098,16 23.0000002,15.0128879 23.0000002,14 L23,4 M9.15384615,3.99999999 L9.15384615,14.1660042 M8.99999999,9.00000001 C8.99999999,10.0128879 12.2534135,11 16.0769233,11 C19.9004331,11 23.0000004,10.0128879 23.0000004,9.00000001"></path></svg>
                </span>
                <nav>
                    
                    <section>
                        <a href="#">Cortes realizados</a>
                        <a href="#">Conexiones contratadas</a>
                    </section>
                    <section>
                        <a href="#">Reconexiones pendientes</a>
                        <a href="#">Reconexiones realizadas</a>
                    </section>
                    
                </nav>
            </div>
            <!-- <div>
                <h2>Movimientos</h2>
                <span>
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256.352 93.28c-65.93 0-125.644 4.402-168.39 11.402-21.374 3.5-38.557 7.704-49.683 12.01-5.563 2.155-9.59 4.392-11.624 6.02-.637.51-.72.65-.95.897.23.245.312.39.95.9 2.034 1.627 6.06 3.864 11.623 6.017 11.125 4.307 28.308 8.512 49.68 12.012 42.748 7 102.46 11.4 168.392 11.4 65.93 0 125.643-4.4 168.39-11.4 21.374-3.5 38.557-7.706 49.682-12.013 5.562-2.153 9.587-4.39 11.62-6.017.64-.51.723-.655.952-.9-.23-.247-.313-.39-.95-.9-2.035-1.626-6.06-3.863-11.622-6.017-11.125-4.307-28.308-8.512-49.682-12.01-42.747-7-102.46-11.404-168.39-11.404zm-.352 9.183a163.82 16.505 0 0 1 92.246 2.867v27.258A163.82 16.505 0 0 1 256 135.473 163.82 16.505 0 0 1 92.182 118.97 163.82 16.505 0 0 1 256 102.462zm110.246 4.322a163.82 16.505 0 0 1 53.572 12.184 163.82 16.505 0 0 1-53.572 12.182v-24.367zM25 144.395v106.216h.154v8.585c.015-.522.326.768 3.977 2.98 4.275 2.587 11.744 5.63 21.66 8.442 3.438.976 7.193 1.93 11.21 2.862V155.956c-11.84-2.584-21.97-5.45-30.22-8.644-2.423-.94-4.67-1.905-6.78-2.917zm462 .337c-1.905.89-3.923 1.746-6.078 2.58-13.184 5.104-31.178 9.373-53.272 12.99-44.187 7.236-104.57 11.64-171.298 11.64-60.444 0-115.64-3.622-158.352-9.68V280.08c11.88 1.733 24.956 3.294 39.1 4.63 73.627 6.96 164.876 6.96 238.504 0 36.813-3.48 66.478-8.47 86.308-14.093 9.915-2.812 17.386-5.855 21.66-8.443 1.945-1.178 2.918-2.08 3.428-2.604V144.732zM48 288.514V496h38V296.46c-14.57-2.36-27.292-5.02-38-7.946zm416 .19c-21.43 5.786-50.79 10.532-86.703 13.927-75.007 7.092-166.884 7.092-241.89 0-4.578-.432-9.045-.89-13.407-1.364V496h342V288.705z"></path></svg>
                </span>
                <nav>
                    <section>
                        <a href="#">Altas en el padrón</a>
                        <a href="#">Bajas en el padrón</a>
                        <a href="#">Anulación de bajas</a>
                    </section>
                    <section>
                        <a href="#">Padrón de usuarios</a>
                        <a href="#">Movimientos del padrón</a>
                    </section>
                    <section>
                        <a href="#">Cargos al contratos</a>
                        <a href="#">Modificar Cargo</a>
                    </section>
                    <section>
                        <a href="#">Actualización de contratos</a>
                        <a href="#">Eliminar cuotas adelantadas</a>
                    </section>
                    <section>
                        <a href="#">Aplicar meses a contratos</a>
                        <a href="#">Aplicar mes faltante a contratos</a>
                        <a href="#">Modificar Cuotas</a>
                    </section>
                    <section>
                        <a href="#">Estado de cuenta</a>
                        <a href="#">Modificar estado de cuenta</a>
                    </section>
                    <section>
                        <a href="#">Condonación de cargos</a>
                        <a href="#">Condonación de cuotas</a>
                        <a href="#">Descuento de recargos</a>
                        <a href="#">Ajustes de movimientos</a>
                    </section>
                    <section>
                        <a href="#">Reporte de movimientos</a>
                    </section>
                </nav>
            </div>
            <div>
                <h2>Configuración</h2>
                <span>
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M487.4 315.7l-42.6-24.6c4.3-23.2 4.3-47 0-70.2l42.6-24.6c4.9-2.8 7.1-8.6 5.5-14-11.1-35.6-30-67.8-54.7-94.6-3.8-4.1-10-5.1-14.8-2.3L380.8 110c-17.9-15.4-38.5-27.3-60.8-35.1V25.8c0-5.6-3.9-10.5-9.4-11.7-36.7-8.2-74.3-7.8-109.2 0-5.5 1.2-9.4 6.1-9.4 11.7V75c-22.2 7.9-42.8 19.8-60.8 35.1L88.7 85.5c-4.9-2.8-11-1.9-14.8 2.3-24.7 26.7-43.6 58.9-54.7 94.6-1.7 5.4.6 11.2 5.5 14L67.3 221c-4.3 23.2-4.3 47 0 70.2l-42.6 24.6c-4.9 2.8-7.1 8.6-5.5 14 11.1 35.6 30 67.8 54.7 94.6 3.8 4.1 10 5.1 14.8 2.3l42.6-24.6c17.9 15.4 38.5 27.3 60.8 35.1v49.2c0 5.6 3.9 10.5 9.4 11.7 36.7 8.2 74.3 7.8 109.2 0 5.5-1.2 9.4-6.1 9.4-11.7v-49.2c22.2-7.9 42.8-19.8 60.8-35.1l42.6 24.6c4.9 2.8 11 1.9 14.8-2.3 24.7-26.7 43.6-58.9 54.7-94.6 1.5-5.5-.7-11.3-5.6-14.1zM256 336c-44.1 0-80-35.9-80-80s35.9-80 80-80 80 35.9 80 80-35.9 80-80 80z"></path></svg>
                </span>
                <nav>
                    <section>
                        <a href="#">Datos de Comisión</a>
                    </section>
                    <section>
                        <a href="#">Puestos y autorizaciones</a>
                        <a href="#">Personal administrativo</a>
                        <a href="#">Asignación de puestos</a>
                        <a href="#">Niveles de acceso</a>
                    </section>
                    <section>
                        <a href="#">Parámetros de cobro</a>
                        <a href="#">Texto para notificaciones</a>
                        <a href="#">Texto para certificación de recibos</a>
                        <a href="#">Marco Juridico</a>
                    </section>
                    <section>
                        <a href="#">Rengos de Adeudo</a>
                        <a href="#">Pronóstico de ingresos</a>
                    </section>
                    <section>
                        <a href="#">Registro de recaudación potencial</a>
                        <a href="#">Recaudacion potencial registrada</a>
                    </section>
                    <section>
                        <a href="#">Clasificación de tarifas</a>
                        <a href="#">Usos del servicio</a>
                    </section>
                    <section>
                        <a href="#">Tarifas</a>
                        <a href="#">Subsidios</a>
                    </section>
                    <section>
                        <a href="#">Calles</a>
                        <a href="#">Colonias</a>
                        <a href="#">Zonas</a>
                    </section>
                </nav>
            </div> -->
        </main>
    </div>
    <script src="code.js"></script>
</body>
</html>