

    <div class="main-content">
        <h1>Ứng dụng xem giờ các thành phố</h1>
        <label for="select-city"></label>
        <select id="select-city">
            <option>Chon thanh pho</option>
            <option value="America-Chihuahua">Chihuahua , Mexico</option>
            <option value="America-Costa_rica">Costa Rica</option>
            <option value="America-Havana">La Havana, Cuba</option>
            <option value="Asia-Hong_Kong">Hong Kong</option>
            <option value="Asia-HO_CHI_MINH">HO CHI MINH , VIET NAM</option>
            <option value="Asia-Tokyo">Tokyo</option>
        </select>
   </div>
<script>
    document.getElementById("select-city").onchange = function (){
        ChooseCity();
    };
    function ChooseCity(){
        var time_zone = document.getElementById("select-city");
        window.location.href = time_zone.value;
    }
</script>
