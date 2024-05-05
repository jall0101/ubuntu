<div class="my-4 container text-center">
  <h1>{{modedsc}}</h1>
</div>
<!--DEPARTAMENTOS-->
<section class="container">
  <div class="row justify-content-center">
    <form action="index.php?page=Mnt_Departamento&mode={{mode}}&departamentocod={{departamentocod}}" method="POST"
      class="col-10 align-self-center bg-gris_claro p-4 rounded" enctype="multipart/form-data"
    >


    <section class="row">
        <!--ASIGNADO COD-->
        <section class="row bg-sgris_claro2 p-3 rounded col-12">
          <section class="row mb-3 bg-gris_claro2 p-3 rounded col-12">
           <label for="departamentocod" class="col-4">Código</label>
          <input type="hidden" id="departamentocod" name="departamentocod" value="{{departamentocod}}"/>
          <input type="hidden" id="mode" name="mode" value="{{mode}}"/>
          <input type="hidden"  name="xssToken" value="{{xssToken}}"/>
          <input type="text" readonly name="departamentocoddummy" value="{{departamentocod}}"/>
          </section>
        </section>

        <section class="row bg-sgris_claro2 rounded col-12">
          <!--CATEGORIA DE EQUIPO EN INVENTARIO-->
          <section class="row mb-3 bg-gris_claro2 p-3 rounded col-12">
            <label for="nombredepartamento" class="col-12 form-label">Filial</label>
            <input type="text" {{readonly}} class="form-control col-12" name="nombredepartamento" value="{{nombredepartamento}}" maxlength="45"
            placeholder="Nombre departamento" />
          </section>
        </section>

      </section>



    {{if has_errors}}
        <section>
          <ul>
            {{foreach general_errors}}
                <li>{{this}}</li>
            {{endfor general_errors}}
          </ul>
        </section>
    {{endif has_errors}}


      <section>
        {{if show_action}}
        <button type="submit" name="btnGuardar" class="bg-dark text-white" value="G"><i class="fa-regular fa-floppy-disk" style="color: #ffffff;"></i>&nbsp;&nbsp;Guardar</button>
        &nbsp;&nbsp;&nbsp;
        {{endif show_action}}
        <button type="button" id="btnCancelar" class="bg-dark text-white"><i class="fa-solid fa-xmark"
        style="color: #ffffff;"></i>&nbsp;&nbsp;Cancelar</button>
      </section>

    </form>
  </div>
</section>


<script>
  document.addEventListener("DOMContentLoaded", function(){
    document.getElementById("btnCancelar").addEventListener("click", function(e){
      e.preventDefault();
      e.stopPropagation();
      window.location.assign("index.php?page=Mnt_Departamentos");
      });
  });
</script>