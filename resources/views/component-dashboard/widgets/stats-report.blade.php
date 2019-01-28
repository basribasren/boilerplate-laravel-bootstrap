<div class="layer w-100">
  <div class="bgc-light-blue-500 c-white p-20">
    <div class="peers ai-c jc-sb gap-40">
      <div class="peer peer-greed">
        <h5>November 2017</h5>
        <p class="mB-0">Sales Report</p>
      </div>
      <div class="peer">
        <h3 class="text-right">$6,000</h3>
      </div>
    </div>
  </div>
  <div class="table-responsive p-20">
    <table class="table">
      <thead>
        <tr>
          <th class=" bdwT-0">Name</th>
          <th class=" bdwT-0">Status</th>
          <th class=" bdwT-0">Date</th>
          <th class=" bdwT-0">Price</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="fw-600">{{ $name }}</td>
          <td><span class="badge bgc-{{ $badgecolor }}-50 c-{{ $badgecolor }}-700 p-10 lh-0 tt-c badge-pill">{{ $status }}</span> </td>
          <td>{{ $date }}</td>
          <td><span class="text-{{ $textcolor }}">${{ $price }}</span></td>
        </tr>
      </tbody>
    </table>
   </div>
</div>