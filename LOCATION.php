<button onclick ="showTowns()" class ="blink-button">LOCATION <button>
      <div id="towns" style ="display:none:">
      <ul>
    
        <li>Nairobi</li>
        <li>Nakuru</li>
        <li>Naivasha</li>
        <li>Baringo</li>
        <li>Eldoret</li>
</ul>
      </div>
      <script>
        function showTowns(){
          var towns = document.getElementById("towns");
          if(towns.style.display === "none"){
          towns.style.display ="block";
        } else {
          towns.style.display ="none";

        }
      }
      </script>         