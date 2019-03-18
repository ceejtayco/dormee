
<!--Table-->
<table id="tablePreview" class="table table-responsive table-striped table-hover py-5 my-5">
  <!--Table head-->
  <thead>
    <tr>
      <th>ID</th>
      <th>Landlord</th>
      <th>Status</th>
      <th>Name</th>
      <th>Address</th>
      <th>Business Permit</th>
      <th>Description</th>
      <th>Price</th>
      <th>Filters</th>
      <th>Photo</th>
      <th>Created At</th>
      <th>Updated At</th>
    </tr>
  </thead>
  <!--Table head-->

  <!--Table body-->
  <tbody>
   @php 
   $dorms = \App\Dorm::all()->where('landlord_id', Auth::user()->id);
   @endphp
   <tr>
    <?php
    foreach ($dorms as $dorm) {
      $filters = "";
      foreach ($dorm->dormFilter()->get() as $filter) {
        $filters .= $filter->name . ", " ;
      }
      $stat = $dorm->status == 1 ? "Verified" : $dorm->status == 0 ? "Unverified" : "Occupied";
      echo "
      <td><a href='". $dorm->id . "'>" . $dorm->id . "</a></td>
      <td>" . $dorm->first()->landlord->first_name . $dorm->first()->landlord->last_name  . "</td>
      <td>" .  $stat . "</td>
      <td>" . $dorm->name . "</td>
      <td>" . $dorm->address . "</td>
      <td>" . $dorm->business_permit . "</td>
      <td>" . $dorm->description . "</td>
      <td>" . $dorm->price . "</td>
      <td>" . $filters.  "</td>
      <td><img src='" . $dorm->photo . "'></td>
      <td>" . $dorm->created_at  . "</td>
      <td>" . $dorm->updated_at  . "</td>
    </tr>
    ";
  }
  ?>


</tbody>
<!--Table body-->
</table>
<!--Table-->
