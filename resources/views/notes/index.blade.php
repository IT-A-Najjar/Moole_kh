<x-app-layout>
   <section class="blog-hero spad">
      <div class="container">
         <div class="row d-flex justify-content-center">
            <div class="col-lg-9 text-center">
               <div class="blog__hero__text">
                  <h2>الملاحظات التي تم تسجيلها الموقع من العملاء</h2>
                  <ul>
                     <li>By Deercreative</li>
                     <li>{{now()}}</li>
                     <li>8 Comments</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="blog-details spad">
      <div class="container">
         <div class="row d-flex justify-content-center">
            <div class="col-lg-12">
               <div class="blog__details__pic border border-danger border-2">
                  <table class="table table-striped table-light">
                     <thead>
                        <tr>
                           <th scope="col">#</th>
                           <th scope="col">Name</th>
                           <th scope="col">Email</th>
                           <th scope="col">Message</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <th scope="row">1</th>
                           <td>Mark</td>
                           <td>Otto</td>
                           <td>@mdo</td>
                        </tr>
                        <tr>
                           <th scope="row">2</th>
                           <td>Jacob</td>
                           <td>Thornton</td>
                           <td>@fat</td>
                        </tr>
                        <tr>
                           <th scope="row">3</th>
                           <td colspan="2">Larry the Bird</td>
                           <td>@twitter</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </section>
</x-app-layout>