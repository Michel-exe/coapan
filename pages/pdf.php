<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos.css">
    <title>Dashboard</title>
</head>
<body>
    <header>
        <div>
            <label>Nombre</label>
            <nav>
                <a href="./dashboard.html">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z"></path></svg>
                </a>
                <a href="../index.php">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1.1" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path  d="M10 2.29v2.124c0.566 0.247 1.086 0.6 1.536 1.050 0.944 0.944 1.464 2.2 1.464 3.536s-0.52 2.591-1.464 3.536c-0.944 0.944-2.2 1.464-3.536 1.464s-2.591-0.52-3.536-1.464c-0.944-0.944-1.464-2.2-1.464-3.536s0.52-2.591 1.464-3.536c0.45-0.45 0.97-0.803 1.536-1.050v-2.124c-2.891 0.861-5 3.539-5 6.71 0 3.866 3.134 7 7 7s7-3.134 7-7c0-3.171-2.109-5.849-5-6.71zM7 0h2v8h-2z"></path></svg>
                </a>
            </nav>
        </div>
    </header>

    <div class="viewPDF">
        <div class="pdf" id="pdf">
            <section>
                <label id="campo1">Campo 1 </label>
                <span data-element="input1">
                    <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                </span>
            </section>
            <section>
                <label id="campo2">Campo 2 </label>
                <span data-element="input2">
                    <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                </span>
            </section>
        </div>
    </div>
    <div class="editPDF">
        <form id="editPDF">
            <h2>Editar PDF</h2>
            <section>
                <label for="">Titulo: </label>
                <input type="text" value="Campo 1" data-element="campo1" id="input1">
            </section>
            <section>
                <label for="">Sub titulo: </label>
                <input type="text" value="Campo 2" data-element="campo2" id="input2">
            </section>
        </form>
    </div>
    <script>
        document.getElementById("editPDF").addEventListener("keyup", e=>{
            let t= e.target
            document.getElementById(t.getAttribute("data-element")).innerHTML=t.value
        })
        document.getElementById("pdf").addEventListener("click", e=>{
            let t= e.target
            let ta= t.tagName;

            if(ta=="path" || ta=="svg" || ta=="SPAN"){
                t= ta=="svg" ? t.parentElement : ta=="path" ? t.parentElement.parentElement : t
                console.log(t);
                document.getElementById(t.getAttribute("data-element")).focus()
            }
            
        })
    </script>
</body>
</html>