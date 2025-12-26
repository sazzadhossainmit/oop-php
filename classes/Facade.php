<?php
  class Facade{
    public function findApartments($place, $divId){
      $appfinder = new ApartmentFinder();
      $geolocator = new GeoLocator();
      $gmap = new GoogleMap();
      $apartments = $appfinder->locateApartment($place);
      foreach($apartments as $apartment){
        $locations[] = $geolocator->geoLocations($apartment);
      }
      $gmap->initialize();
      $gmap->drawlocation();
      $gmap->dispatch();
    }
  }
?>