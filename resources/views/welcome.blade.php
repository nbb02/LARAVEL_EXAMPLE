<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
        html {
            display: flex;
            justify-content: center;
        }

        body {
            width: 8.5in;
            padding: 2em;
        }

        body>div:first-child {
            display: flex;
            justify-content: space-between;
            align-items: center;

            >img {
                width: 200px;
                height: 200px;
            }
        }

        hr {
            height: 0.25em;
            background-color: black;
        }

        p>strong {
            text-decoration: underline;
        }

        table {
            width: 100%;

            td {
                padding: 0.5em;
                vertical-align: top;
            }
        }

        li {
            padding: 0.5em;
        }

        h3 {
            margin-top: 5em;
            margin-right: 3em;
            text-align: end;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div>
        <div>
            <h1>{{$data['name']}}</h1>
            <h3>{{$data['contact']}}</h3>
            <h3>{{$data['email']}}</h3>
            <h3>{{$data['address']}}</h3>
        </div>
    </div>
    <hr />
    <p>
        <strong>OBJECTIVE</strong>
        <br />
        <br />
        {{$data['objective']}}
    </p>
    <p>
        <strong>EDUCATIONAL BACKGROUND</strong>
    </p>
    <table>
        <tr>
            <td>College</td>
            <td>:</td>
            <td>
                Bachelor of Science in Information Technology <br />
                Baliwag Polytechnic College <br />
                Baliwag, Bulacan <br />
                Academic Year 2021 - Present
            </td>
        </tr>
        <tr>

        </tr>
    </table>
    <p>
        <strong>SPECIAL SKILLS</strong>
    </p>
    <ul>

    </ul>
    <p>
        <strong>PERSONAL DATA</strong>
    </p>
    <table>

    </table>
</body>

</html>