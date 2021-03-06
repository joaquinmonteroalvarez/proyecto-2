import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Header extends Component {
    render() {
        return (
          <header>
            <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet"></link>
          </header>
        );
    }
}
