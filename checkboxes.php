<!DOCTYPE html>
<html>
<head>
    <title></title>

    <!-- Ignite UI Required Combined CSS Files -->
    <link href="http://cdn-na.infragistics.com/igniteui/2014.2/latest/css/themes/infragistics/infragistics.theme.css" rel="stylesheet" />
    <link href="http://cdn-na.infragistics.com/igniteui/2014.2/latest/css/structure/infragistics.css" rel="stylesheet" />

    <script src="http://modernizr.com/downloads/modernizr-latest.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>

    <!-- Ignite UI Required Combined JavaScript Files -->
    <script src="http://cdn-na.infragistics.com/igniteui/2014.2/latest/js/infragistics.core.js"></script>
    <script src="http://cdn-na.infragistics.com/igniteui/2014.2/latest/js/infragistics.lob.js"></script>

</head>
<body>
    <style>        
        .combo-label {margin-bottom:.5em;}
    </style>

    <h4 class="combo-label">Drop Down on Focus, Single Selection</h4>
    <div id="singleSelectCombo"></div>

    <h4 class="combo-label">Multiple Selection (Hold Ctrl Key to Select Multiple Items)</h4>
    <div id="multiSelectCombo"></div>

    <h4 class="combo-label">Multiple Selection with Checkboxes</h4>
    <div id="checkboxSelectCombo"></div>

    <script>

        var colors = [
            { Name: "Black" },
            { Name: "Blue" },
            { Name: "Brown" },
            { Name: "Green" },
            { Name: "Orange" },
            { Name: "Purple" },
            { Name: "Red" },
            { Name: "White" },
            { Name: "Yellow" },
        ];

        $(function () {

            $("#singleSelectCombo").igCombo({
                width: "270px",
                dataSource: colors,
                textKey: "Name",
                valueKey: "Name",
                dropDownOnFocus: true
            });

            $("#multiSelectCombo").igCombo({
                width: "270px",
                dataSource: colors,
                textKey: "Name",
                valueKey: "Name",
                multiSelection: "on"
            });

            $("#checkboxSelectCombo").igCombo({
                width: "270px",
                dataSource: colors,
                textKey: "Name",
                valueKey: "Name",
                multiSelection: "onWithCheckboxes"
            });

        });

    </script>

</body>
</html>