<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<style>
    body {
        background: white;
        font-family: 'Roboto', sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .sidebar {
        height: 100%;
        width: 240px;
        position: fixed;
        left: 0;
        top: 0;
        z-index: 100;
        background: #f4f4f8;
        padding: 1rem;
        overflow-y: auto;
    }

    .sidebar-header {
        text-align: center;
        text-transform: uppercase;
        font-weight: 500;
    }

    .sidebar li {
        margin-bottom: 1rem;
        list-style: none;
    }

    .sidebar a {
        color: black;
        text-decoration: none;

    }

    .main {
        margin-left: 200px;
    }

    .sidebar-menu {
        padding: 2em;
    }

</style>
<body>
<div class="sidebar">
    <div class="sidebar-header">
        <h3>admin</h3>
    </div>
    <div class="sidebar-menu">
        <ul>
            <li>
                <a href="/admin">
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="/userJoinEvent">
                    <span>UserJoinEvent</span>
                </a>
            </li>
            <li>
                <a href="/event-index">
                    <span>Events</span>
                </a>
            </li>
            <li>
                <a href="/volunteer">
                    <span>Volunteer</span>
                </a>
            </li>
            <li>
                <a href="/donation-index">
                    <span>Donation</span>
                </a>
            </li>
            <li>
                <a href="/org-index">
                    <span>Organization</span>
                </a>
            </li>
            <li>
                <a href="/listFeedback">
                    <span>Feedback</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="container">
    <div class="main">
        @yield('content')
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
</body>

</html>
