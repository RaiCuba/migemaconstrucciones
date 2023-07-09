@extends('layouts.menupricipal')
@section('Contenido')
    <div class="container">
        <input type="text" id="latitud" name="latitud" value="{{ $asis->latitud }}">
        <input type="text" id="longitud" name="longitud" value="{{ $asis->longitud }}">

    </div>
    <div>
        <h5>Empleado: </h5>
        <p>{{ $asis->Empleado->persona->nombre }}</p>
        <p>{{ $asis->Empleado->persona->ape }}</p>
    </div>


    {{-- <div id="map" style="height: 400px; width: 100%;  margin: 0; padding: 0;"></div> --}}


    <h3>My Google Maps Demo</h3>
    <!--The div element for the map -->
    <div id="map"></div>

    <!-- prettier-ignore -->
 <script>(g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})
    ({key: "AIzaSyC8zRQX9l73FPPSaDe95eYDSnC-v7PgEH4", v: "beta"});</script>


    <script>
        // Initialize and add the map
        let map;

        async function initMap() {
            // The location of Uluru
            const position = {
                lat: {{ $asis->latitud }},
                lng: {{ $asis->longitud }}
            };
            // Request needed libraries.
            //@ts-ignore
            const {
                Map
            } = await google.maps.importLibrary("maps");
            const {
                AdvancedMarkerView
            } = await google.maps.importLibrary("marker");

            // The map, centered at Uluru
            map = new Map(document.getElementById("map"), {
                zoom: 4,
                center: position,
                mapId: "DEMO_MAP_ID",
            });

            // The marker, positioned at Uluru
            const marker = new AdvancedMarkerView({
                map: map,
                position: position,
                title: "Uluru",
            });
        }

        initMap();
    </script>
@endsection
