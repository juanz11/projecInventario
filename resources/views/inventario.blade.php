
               <form action="{{ url('/add_inventario') }}" method="get">
                <button type="submit" class="btn blue no-margin btn btn-success  dt-button">
                     Agregar Inventario
                   </button>
                   </form>

                <div class="table-responsive">
                  <table class="table w-100 nowrap scroll-horizontal-vertical myTable table-striped w-100">
                    <thead class="">

                        <tr class="text-center">                           
                         <th>ID</th>
                         <th>NOMBRE</th>
                          <th>Description</th>
                          <th>Price</th> 
                          
                        </tr>
                      </thead>
                      <tbody>
                         
                      @if(isset($listprod))
                          @foreach ($listprod as $value) 
                          <tr class="text-center">
                                 
                                 <td>{{$value->id }}</td>
                                 <td>{{$value->name }}</td>
                                 <td>{{$value->description }}</td>
                                 <td>{{$value->price }}</td>
                               
                                    </a>
                                </td>
                              </tr>   

                          @endforeach
                        @endif 
                      
                      </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    

  <!--/ Line Chart Card -->
</section>