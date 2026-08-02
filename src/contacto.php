<?php include 'header.php'; ?>

<main class="container-fluid my-5 py-1" style="padding-left: 8vw; padding-right: 8vw;">
    
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
            
            <div class="bg-light p-4 rounded-3 border shadow-sm">
                
                <form action="" method="POST">
                    
                    <div class="mb-3">
                        <label for="nombre" class="form-label fw-bold">Nombre</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Escribe tu nombre">
                    </div>
                    
                    <div class="mb-3">
                        <label for="correo" class="form-label fw-bold">Correo</label>
                        <input type="email" id="correo" name="correo" class="form-control" placeholder="nombre@correo.com">
                    </div>

                    <div class="mb-3">
                        <label for="asunto" class="form-label fw-bold">Asunto</label>
                        <input type="text" id="asunto" name="asunto" class="form-control" placeholder="Motivo del mensaje">
                    </div>
                    
                    <div class="mb-4">
                        <label for="mensaje" class="form-label fw-bold">Mensaje</label>
                        <textarea id="mensaje" name="mensaje" class="form-control" rows="4" placeholder="¿En qué puedo ayudarte?"></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary px-4 py-2 fw-semibold">Enviar</button>
                    
                </form>
                
            </div>

        </div>
    </div>
                
    <div class="col-md-8 mt-4">
        <a href="../index.php" class="btn btn-primary btn-lg px-4 shadow-sm ">Volver</a>
    </div>

</main>

<?php
$pagina_actual = 'contacto'; 
include 'footer.php';
?>