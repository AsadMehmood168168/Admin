{{-- Created : on 24 September, 2020 --}}
{{-- Author : Asad --}}
{{-- Last Modified : on 24 September, 2020 --}}
<title>Artilce Text</title>
<script>
    function goToTable() {
        var table1 = document.getElementById("tb1");
        var table2 = document.getElementById("tb2");
        var table3 = document.getElementById("tb3");
        if (table1) {
            window.location.href = '#table1';
        } else if (table2) {
            window.location.href = '#table2';
        } else if (table3) {
            window.location.href = '#table3';
        }
    }

    function goToFigure() {
        var fig1 = document.getElementById("fig1");
        var fig2 = document.getElementById("fig2");
        var fig3 = document.getElementById("fig3");
        if (fig1) {
            window.location.href = '#figure1';
        } else if (fig2) {
            window.location.href = '#figure2';
        } else if (fig3) {
            window.location.href = '#figure3';
        }
    }

    function goToReference() {
        var ref1 = document.getElementById("ref(1)");
        var ref2 = document.getElementById("ref(2)");
        var ref3_1 = document.getElementById("ref(3)_1");
        if (ref1) {
            window.location.href = '#AbdEl-hameed';
        } else if (ref2) {
            window.location.href = '#Adepoju';
        } else if (ref3_1) {
            window.location.href = "#Alhaffar";
        }
    }

    function goToSection() {
        var abstract = document.getElementById("tbAbstract");
        var introduction = document.getElementById("tbIntroduction");
        var materialsAndMethods = document.getElementById("tbMaterialsAndMethods");
        var resultAndDiscussion = document.getElementById("tbResultAndDiscussion");
        var conclusion = document.getElementById("tbConclusion");
        var conflictsofInterest = document.getElementById("tbConflictsofInterest");
        var references = document.getElementById("tbReferences");
        if (abstract) {
            window.location.href = '#Abstract';
        } else if (introduction) {
            window.location.href = '#Introduction';
        } else if (materialsAndMethods) {
            window.location.href = '#MaterialsAndMethods';
        } else if (resultAndDiscussion) {
            window.location.href = '#ResultAndDiscussion';
        } else if (conclusion) {
            window.location.href = '#Conclusion';
        } else if (conflictsofInterest) {
            window.location.href = '#ConflictsofInterest';
        } else if (references) {
            window.location.href = '#References';
        }
    }

</script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/MathJax.js?config=default'></script>
<style>
    #tableOfContents {
        line-height: 2.6;
        position: fixed;
        left: 68%;
        font-size: 140%;
    }

    #titleHeading {
        font-size: 170%;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bolder;
    }

    .articleInformation {
        margin-left: 2%;
        border-right: 1px solid black;
        padding-right: 2%
    }

    #authorName {
        margin-left: 1.5%;
        margin-top: 2%;
    }


    #heading {
        border-bottom: 2px solid black;
        font-family: Arial;
    }

    #body {
        font-family: Arial;
        font-size: 130%;
        line-height: 1.6;
    }

    .centerText {
        text-align: center;
    }

</style>
@extends('AppTemplate.homeTemplate')
@section('content')
    @include('AppTemplate.navBar')
    <div class="container main">
        <div class="bs-example">
            <div class="row" id="articleContent">
                
            </div>
        </div>
    </div>
@endsection