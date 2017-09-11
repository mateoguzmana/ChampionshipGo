import React, { Component } from 'react';

export default class Map extends Component {

  constructor(props) {
    super(props);
  }

  componentDidMount() {
    this.map = new google.maps.Map(this.refs.map, {
      zoom: 5,
      center: { lat: -25.363, lng: 131.044 }
    });

    var marker = new google.maps.Marker({
      position: myLatlng,
      title:"Hello World!"
    });

    var myLatlng = new google.maps.LatLng(-25.363882,131.044922);

    marker.setMap(this.map);
  }

  render() {
    return (
      <div
        id="map"
        ref="map"
        className="map"
        style={{
          width: window.innerWidth + "px",
          height: window.innerHeight + "px",
          marginTop: "-25px",
          marginLeft: "-390px",
          position: "relative",
          overflow: "visible"
        }}>
      </div>
    );
  }
}