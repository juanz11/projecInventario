<form method="POST" action="{{ url('/save_product') }}" enctype="multipart/form-data">
                         @csrf

                            <div class="form-group">
                                <label class="form-label"><strong>Nombre</strong></label>
                                <input  type="text" class="form-control " name="name" >
                            </div>    
                           
                             
                           <div class="form-group">
                                <label class="form-label"><strong>Description del producto</strong></label>
                                <input  type="text" class="form-control " name="description" >
                            </div>

                            <div class="form-group">
                                <label class="form-label"><strong>Precio</strong></label>
                                <input  type="city" class="form-control " name="price" >
                            </div>

                            

                              <hr>
                            <button type="submit" class="btn btn-block btn-primary mt-1 btn-success">Guardar</button>
                            <a  class="btn btn-block btn-primary mt-1" href="/inventario">
                              Volver
                             </a> 
                        </form>
