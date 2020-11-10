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
        var ref4 = document.getElementById("ref(4)");
        var ref5 = document.getElementById("ref(5)");
        var ref6 = document.getElementById("ref(6)");
        var ref7 = document.getElementById("ref(7)");
        var ref8 = document.getElementById("ref(8)");
        var ref9 = document.getElementById("ref(9)");
        var ref10 = document.getElementById("ref(10)");
        var ref11 = document.getElementById("ref(11)");
        var ref12 = document.getElementById("ref(12)");
        var ref13 = document.getElementById("ref(13)");
        var ref14 = document.getElementById("ref(14)");
        if (ref1) {
            window.location.href = '#AbdEl-hameed';
        } else if (ref2) {
            window.location.href = '#Adepoju';
        } else if (ref3_1) {
            window.location.href = "#Alhaffar";
        } else if (ref4) {
            window.location.href = "#Betiku";
        } else if (ref5) {
            window.location.href = "#Cheng";
        } else if (ref6) {
            window.location.href = "#Dheba";
        } else if (ref7) {
            window.location.href = "#ElMaghraby";
        } else if (ref8) {
            window.location.href = "#Fouda";
        } else if (ref9) {
            window.location.href = "#Guan";
        } else if (ref10) {
            window.location.href = "#Hui";
        } else if (ref11) {
            window.location.href = "#Ituen";
        } else if (ref12) {
            window.location.href = "#Njoku";
        } else if (ref13) {
            window.location.href = "#Nnanna(2010)";
        } else if (ref14) {
            window.location.href = "#Nnanna(2014)";
        }
    }

    function goToSection() {
        var abstract = document.getElementById("tbAbstract");
        var keywords = document.getElementById("tbkeywords");
        var introduction = document.getElementById("tbIntroduction");
        var materialsAndMethods = document.getElementById("tbMaterialsAndMethods");
        var resultAndDiscussion = document.getElementById("tbResultAndDiscussion");
        var conclusion = document.getElementById("tbConclusion");
        var conflictsofInterest = document.getElementById("tbConflictsofInterest");
        var affiliation = document.getElementById("tbAffiliation");
        var references = document.getElementById("tbReferences");
        var rights_and_permissions = document.getElementById("tbRights_and_permissions");
        var citeArtilce = document.getElementById("tbCiteArtilce");
        if (abstract) {
            window.location.href = '#Abstract';
        } else if (keywords) {
            window.location.href = '#keywords';
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
        } else if (conflictsofInterest) {
            window.location.href = '#Affiliation';
        } else if (references) {
            window.location.href = '#References';
        } else if (rights_and_permissions) {
            window.location.href = '#Rights_and_permissions';
        } else if (citeArtilce) {
            window.location.href = '#CiteArtilce';
        }
    }

    function goToAffliation(){
        var aff1 = document.getElementById("aff1");
        var aff2 = document.getElementById("aff2");
        if (aff1){
            window.location.href = '#affliation_1'
        } else if (aff2) {
            window.location.href = '#affliation_2'
        }
    }

    // This function is use for other links or for external links
    function goToLink(){
        var ctArtilce = document.getElementById("ctArticle");
        if (ctArticle){
            window.location.href = '#cite_this_article'
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
    #journalTitle{
        margin-top: 2.5%;
        font-size: 130%;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bolder;
    }
    .body{
        font-family: Arial;
        font-size: 130%;
        line-height: 1.6;
    }

    .margin{
        margin-top: 2.5%;
    }

    #keyword{
        background-color: lightgray;
        border: 1px solid gray;
        border-radius: 25px;
        margin-left: 5px;
        margin-top: 10px;
    }
</style>
@extends('AppTemplate.homeTemplate')
@section('content')
    @include('AppTemplate.navBar')
    <div class="container main">
        <div class="bs-example" id="justifyText">
            <div class="row" id="articleContent">
                <div class="col-sm-9" id="articleText">
                    <div class="row" id="articleInfo">
                        <div class="articleInformation" id="Reserach">
                            Reserach
                        </div>
                        <div class="articleInformation" id="OpenAccess" style="color: red">
                            Open Access
                        </div>
                        <div id="Published" style="margin-left: 2%;">
                            Published: April 15, 2020
                        </div>
                    </div>
                    <div class="row" id="titleHeading">
                        <div class="col-sm-12">
                            Thermodynamic, Adsorption and Optimization Studies on Carbon Steel in Hydrochloric
                            Acid Environment using Okro Leaf Extract as Corrosion Inhibitor
                        </div>
                    </div>
                    <div class="row" id="authorsList">
                        <div id="authorName">
                            <a href="#affliation_1" onclick="goToAffliation()" id = "aff1"> <sup>1</sup> A.O. Okewale </a>
                        </div>
                        <div id="authorName">
                            <a href="#affliation_1" onclick="goToAffliation()" id = "aff1"> <sup>1</sup> C.N. Owabor </a>
                        </div>
                        <div id="authorName">
                            <a href="#affliation_2" onclick="goToAffliation()" id = "aff2"> <sup>2</sup> J.G. James </a>
                        </div>
                    </div>
                    <div class="row" id="journalTitle">
                        <div class="col-sm-12">
                            Research Journal of Applied Sciences, Engineering and Technology 17(2): 40-53, 2020 
                            | <a href="#cite_this_article" onclick="goToLink()" id = "ctArticle"> Cite This Artilce</a> 
                        </div>
                    </div>
                    <div class="row" id="Abstract">
                        <div class="col-sm-12">
                            <h3 id="heading">
                                Abstract
                            </h3>
                        </div>
                        <div class="col-sm-12" id="Body">
                            This present study seeks to exploit the use of eco-friendly, Okro leaf extract as an inhibitor
                            in mitigating
                            corrosion on carbon steel metal in acidic environment Gravimetric method was used to study the
                            corrosion process.
                            It was revealed that the inhibition efficiency of the extract on carbon steel decreases as
                            temperature increases. This
                            trend confirmed the physical adsorption mechanism for the corrosion process that resulted in a
                            high rate of corrosion
                            of the carbon steel. Activation energy Ea, enthalpy (ΔH°), and entropy (ΔS°) calculated showed
                            good interactions.
                            The rise in activation energy with inhibitor concentration confirmed the physical
                            (physisorption) adsorption
                            mechanism for the corrosion of a carbon steel surface. The positive value of adsorption enthalpy
                            (ΔH°) obtained
                            confirmed the endothermic nature of the corrosion process. The activation entropy (ΔS°) values
                            obtained were all
                            negatives which show that the activated complex in the rate-determining step represents
                            association rather than
                            dissociation step. Corrosion inhibition occurred by an attribute of inhibitor molecules
                            adsorption on the surface of
                            carbon steel which is seen to be in conformity with Langmuir, Freundlich, and El-Awady
                            adsorption isotherm
                            models. To obtain the least weight loss of carbon steel, optimization of the process variables
                            affecting the corrosion
                            process was carried out using Response Surface Methodology (RSM). Three parameters were varied
                            viz; inhibitor
                            concentration, contact time and temperature, and their effects on weight loss of carbon steel
                            were established. The
                            obtained data fitted well to the quadratic model which was also validated. The model predicted
                            the lowest weight
                            loss of 0.045 g with the optimal condition of inhibitor concentration of 198.71 ppm, 2.04 hrs of
                            contact time, and
                            40.29°C of temperature.
                        </div>
                    </div>
                    <div class="row" id="Keywords">
                        <div class="col-sm-12">
                            <h3 id="heading">
                                Keywords
                            </h3>
                        </div>
                        <div class="col-sm-12 centerText body">
                            <div class="col-sm-3" id="keyword">
                                Adsorption
                            </div>
                            <div class="col-sm-3" id="keyword">
                                inhibition
                            </div>
                            <div class="col-sm-3" id="keyword">
                                okro leaf extract
                            </div>
                            <div class="col-sm-3" id="keyword">
                                optimization
                            </div>
                            <div class="col-sm-3" id="keyword">
                                RSM
                            </div>
                            <div class="col-sm-3" id="keyword">
                                thermodynamic
                            </div>
                        </div>
                    </div>
                    <div class="row" id="Introduction">
                        <div class="col-sm-12">
                            <h3 id="heading">
                                Introduction
                            </h3>
                        </div>
                        
                        <div class="col-sm-12" id="Body">
                            The consequences of corrosion are numerous,diverse and effects of these on the
                            efficient, safe and reliable operation of equipment or edifices are often
                            more serious than simple loss of a mass of metal. In reality, corrosion can never be
                            stopped but can be hindered to a reasonable level. Failure of various kinds and the
                            need for expensive replacements may occur even though the amount of metal destroyed
                            is quite small (Umoren <em>et al</em>., 2009). The phenomenon of corrosion mitigation,
                            abatement and inhibition are major scientific issues that should be tackled daily
                            due to the increasing need for metallic materials in the technological advancement
                            of our industries. Owing to harms arising from corrosion that are challenging the
                            chemical and process industries; several methods of controlling corrosion and
                            prevention have been put in place. Some of these methods include; anodic and
                            cathodic protection, lubrication, galvanizing, alloying, coating and the use of
                            organic and inorganic inhibitors. The choice and application of any of these methods
                            was based on their economic factors, efficiency and nature of the corrosive
                            environment (Njoku, <a href="#Njoku" onclick="goToReference();" id="ref(12)">1998</a>). The use of inhibitor is one of the most practical
                            methods for protection against corrosion in corrosive environments. Inhibitors are
                            chemicals that directly or indirectly coat a film on a metal surface to protect it
                            from its environment. Generally, inhibitors are absorbed by the metal surface
                            from a solution or dispersed, but some are applied directly as coatings.
                            However, the dissolution of metal can be suppressed by the action of adsorptive
                            inhibitors which may prevent the adsorption of the aggressive ions and by the
                            formation of a more resistant film on the metallic surface (El Maghraby,<a href="#ElMaghraby" onclick="goToReference();" id="ref(7)">2009</a>).
                            Historically, most of the known corrosion inhibitors are synthetic
                            chemicals (heavy metal), expensive and very hazardous to environment. Therefore,
                            it is desirable to source for environmentally safe inhibitors (Paul <em>et al</em>., 2012).
                            In view of these, researches had been undertaken on the development of an
                            ecofriendly natural inhibitors and one of such is Okro leaf (Abelmoschus esculentus).
                            The Okro leaf phytochemical is rich in tannins, steroids, flavonoids, phenols and terpenoids
                            (Dheba <em>et al</em>., <a href="#Dheba" onclick="goToReference();" id="ref(6)">2017</a>).
                            These phytochemical constituents especially tannins have an array of hydroxyl and
                            carboxyl groups through which the molecules can adsorbed on corroding metallic
                            surfaces thus inhibiting the corrosion process on the carbon steel (Oki <em>et al</em>., 2011).
                            Optimization and modeling is of great importance in any process as it improves
                            the yield (Adepoju and Eyiobi, <a href="#Adepoju" onclick="goToReference();"
                                id="ref(2)">2016</a>). The use of a unity variable method for
                            modeling and optimization is now becoming outdated because it does not show any
                            interaction between the other variables considered in the process (Seramen <em>et al</em>.,
                            2010).
                            Response Surface Methodology (RSM) is a method of optimization which consists of
                            experimental design, analysis and modeling through the
                            partial fitting of regression from the experimental
                            factors (Wang <em>et al</em>., 2011). RSM has the ability to link
                            many variables at a time and display the mutual
                            interaction on the yield of a route, it also facilitate
                            reduction in the amount of experimental runs required
                            to provide adequate evidence for results that are
                            acceptable statistically. Extract from leaves has been
                            studied as a potential for corrosion inhibitor but no
                            research has been conducted on the use of Okro leaf
                            extract as a corrosion inhibitor. Likewise, RSM has not
                            been reported on corrosion inhibition of carbon steel
                            using Okro leaf extract.
                            This present work studied the Okro leaf extract as
                            an inhibitor, kinetics and mechanism of adsorption and
                            also optimized the process variables already reported in
                            literature affecting corrosion process (Yawas, 2005). In
                            order to minimize the weight loss of the carbon steel,
                            RSM was used to know the effects of three factors
                            (temperature, concentrations and contact time) and their
                            reciprocal effect on rate of corrosion on carbon steel
                            metal. The work established the process condition in a
                            view to achieving minimum weight loss on carbon steel
                            which could be applied to local and industrial corrosion
                            treatment.
                        </div>
                    </div>
                    <div class="row" id="MaterialsAndMethods">
                        <div class="col-sm-12">
                            <h3 id="heading">
                                Materials and Methods
                            </h3>
                        </div>
                        <div class="col-sm-12" id="Body">
                            <p>
                                The okro leaves (<em>Abelmoschus esculentus</em>) were
                                collected from Agbahro community located in Effurun,
                                Delta State, Nigeria. Soxhlet extractor apparatus
                                (Techmel and Techmel, USA), oven (Gallenkamph 2),
                                PGW752i weighing balance with resolution of 0.001
                                mg were used for the study.
                            </p>
                            <p id="Okroleafextractpreparation">
                                <b>Okro leaf extract preparation: </b> The Okro leaves
                                (Abelmoschus esculentus) were washed thoroughly with running water to remove unwanted
                                materials. The
                                washed samples were dried in open air for 4 days and
                                grinded to a particle seize of 0.143 μm. The sample was
                                stored in a desiccator before used. 25 g of the dried
                                alligator pepper pods powder was transferred into a 500 mL
                                round-bottom flask and 300 mL of 70% ethanol. A
                                reflux condenser was then connected to the flask and
                                cold water was allowed to flow through the condenser
                                for better reduction of solvent losses. The set-up was
                                placed on a heating mantle and the Okro leaf extract
                                was extracted exhaustively by heating the solution
                                under reflux at 78°C. Rotary evaporator (model R-210)
                                was used to remove the remaining solvent (ethanol)
                                from the extract.
                            </p>
                            <p id="Procedureoftheexperiment">
                                <b>Procedure of the experiment: </b> The gravimetric or
                                weight loss method was used. The carbon steel was
                                mechanically polished with silicon carbide abrasive
                                paper, degreased with ethanol, washed in distilled water
                                and dried in acetone. Each carbon steel coupon was
                                sized 40 mm×20 mm×2 mm. Before polishing, a hole
                                of 0.1 cm was drilled on each coupon. The coupon was
                                suspended with the aid of a nylon thread in a 100 mL
                                beaker with 100 mL of 1.5M HCl at different inhibitor
                                concentrations. The mechanism of inhibition and thermodynamic
                                parameters were studied at 308, 318, 328, 338 and 348
                                K temperature at contact time of 7 h. Each of the carbon
                                steel metal coupons after the corrosion process was
                                dipped in both distilled water and ethanol solutions.
                                This was scrubbed to remove any remaining residual
                                inhibitor concentration and HCl. Thereafter, the coupon
                                was then washed thoroughly with washing liquor,
                                rinsed with distilled water and later dried in acetone
                                before been reweighed.
                            </p>
                            <p id="Determinationofweightloss">
                                <b>Determination of weight loss: </b> The weight loss of the
                                mild steel coupon was determined using <a href="" id="eq1">Eq. (1)</a> :
                                {{-- equation 1 --}}
                            <p id="equation1">
                                $$ \text{Weight loss,(g)} = W - W_{i}$$
                            </p>
                            <p id="equation1(info)">
                                where, <br>
                                W = The initial weight of the mild steel coupon <br>
                                W<small>i</small> = The weight of the carbon steel coupon after
                                corrosion study
                            </p>
                            </p>
                            <p id="Determinationofinhibitorefficiency">
                                <b>Determination of inhibitor efficiency: </b> The efficiency
                                of corrosion inhibition was obtained using the equation
                                below:
                                {{-- equation 2 --}}
                            <p id=equation2>
                                $$ \text{E(%)} = \frac{ W_{b} - W_{c} }{ W_{b} } \times 100 $$
                            </p>
                            <p id="equation2(info)">
                                where, <br>
                                W<small>b</small> = The loss in weight in uninhibited medium (blank) <br>
                                W<small>c</small> = The loss in weight in inhibited medium
                            </p>
                            </p>
                            <p id="Optimizationstudiesonrateofcorrosiononcarbonsteel:">
                                <b>Optimization studies on rate of corrosion on carbon steel:</b>
                                Optimization of the process variables influencing
                                the rate of corrosion was carried out using Response
                                {{-- table 1 --}}
                            <p id="table1" class="table-responsive">
                                <b>Table 1: Experimental factors codes and level</b>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Variables</th>
                                        <th>Symbol</th>
                                        <th>Low factor (-1)</th>
                                        <th>Mid-point factor (0)</th>
                                        <th>High factor (+1)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Concentration of inhibitor, (ppm)</td>
                                        <td>X<small>1</small></td>
                                        <td>50</td>
                                        <td>150</td>
                                        <td>250</td>
                                    </tr>
                                    <tr>
                                        <td>Contact time, (hr)</td>
                                        <td>X<small>2</small></td>
                                        <td>2</td>
                                        <td>7</td>
                                        <td>12</td>
                                    </tr>
                                    <tr>
                                        <td>Temperature, (°C)</td>
                                        <td>X<small>3</small></td>
                                        <td>35</td>
                                        <td>45</td>
                                        <td>55</td>
                                    </tr>
                                </tbody>
                            </table>
                            </p>
                            Surface Methodology (RSM). Three variables were
                            varied viz; concentration of Okro leaf extract
                            (inhibitor), temperature and contact time and their
                            effects on weight loss of the carbon steel was
                            investigated. 17 experiments runs were generated using
                            the Box Behnken Design (BBD). The model fitness was
                            evaluated using test of significance and Analysis of
                            Variance (ANOVA). The selected factors concentration
                            of inhibitor, contact time and temperature represent X1,
                            X2 and X3 respectively. This is shown in


                            <a href="#table1" id="tb1" onclick="goToTable();">Table 1</a>.
                            The coefficient of the polynomial model was
                            determined using the multiple regressions as shown in
                            <a href="" id="eq3">Eq. (3)</a> :
                            {{-- equation 3 --}}
                            <p id=equation3>
                                $$ \text{Y} = b_{0} + \sum^k_{i=1} \beta_iX_i +\sum^k_{i=1} \beta_{ii}X^2_i + \sum_{
                                {i}\lt{j} }
                                \beta_{ij}X_{i}X_{j} + e $$
                            </p>
                            where, <br>
                            Y = The weight loss <br>
                            b<small>o</small> = The intercept <br>
                            b<small>ij</small> = The interaction effect <br>
                            b<small>ii</small> = The quadratic coefficients of X<small>i</small> <br>
                            e = The random error <br>
                            (Omoruwou <em>et al</em> ., 2017; Betiku and Adesina, <a href="#Betiku" onclick="goToReference();" id="ref(4)">2013</a>
                            ). Design Expert 7.00 software was used to design
                            and analyze the data from the experiment. This is a
                            statistical software package that does design of
                            experiments, comparative tests and optimization of the
                            process variables. It is also used to study the parameters
                            on the yield of a process using the graphical tool.
                            </p>
                        </div>
                    </div>
                    <div class="row" id="ResultAndDiscussion">
                        <div class="col-sm-12">
                            <h3 id="heading">
                                Result And Discussion
                            </h3>
                        </div>
                        <div class="col-sm-12" id="Body">
                            <p>
                                As evidenced in <a href="#table2" onabort="goToTable();" id="tb2">Table 2</a> , the
                                preponderance of
                                tannin, flavonoids, steroids, phenols and terpenoids in
                                the Okro leaf Extract can be said to enhance the
                                corrosion inhibition of carbon steel in acidic
                                environment studied. The presence of these compounds
                                has been reported to promote the corrosion inhibition of
                                mild steel in aggressive acidic media (Umoren <em>et al</em>.,2006).
                                This also corroborates the work of Prithiba <em>et al</em>.
                                (2014), Owate <em>et al</em>. (2014) and Nwigbo <em>et al</em>. (2012).
                            </p>
                            <p id="Effectoftemperatureofcorrosionrateofcarbonsteel">
                                <b>Effect of temperature of corrosion rate of carbon steel: </b>
                                <a href="#figure1" onclick="goToFigure();" id="fig1">Figure 1</a> present the effect of
                                temperature on rate
                                of corrosion of carbon steel. It can be seen that the rate
                                of corrosion is higher in medium without inhibitor in
                                comparison to the one that has inhibitor. Increased in
                                temperature led to increase in corrosion rate of the
                                carbon steel due to the fact that at higher temperature
                                the process of corrosion occurred rapidly due to
                            <p id="table2" class="table-responsive">
                                <b>Table 2: Phytochemical analysis of Okro leaf extract (<em>Abelmoschus
                                        esculentus</em>)</b>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Chemical components</th>
                                        <th>Plant extracts</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tannins</td>
                                        <td>+++</td>
                                    </tr>
                                    <tr>
                                        <td>Steriods</td>
                                        <td>+++</td>
                                    </tr>
                                    <tr>
                                        <td>Flavonoids</td>
                                        <td>+++</td>
                                    </tr>
                                    <tr>
                                        <td>Saponins</td>
                                        <td>+</td>
                                    </tr>
                                    <tr>
                                        <td>Alkaloids</td>
                                        <td>+</td>
                                    </tr>
                                    <tr>
                                        <td>Anthraquinones</td>
                                        <td>+</td>
                                    </tr>
                                    <tr>
                                        <td>Phenols</td>
                                        <td>+++</td>
                                    </tr>
                                    <tr>
                                        <td>Resin</td>
                                        <td>++</td>
                                    </tr>
                                    <tr>
                                        <td>Terpenoids</td>
                                        <td>+++</td>
                                    </tr>
                                    <tr>
                                        <td>Cardiac Glycosides</td>
                                        <td>+++</td>
                                    </tr>
                                </tbody>
                            </table>
                            </p>
                            <p class="centerText" id="table2Info"> <b> +++ = Rich, ++ Moderate, + = good, - = Absent, Dheba
                                    <em>et al</em>.,<a href="#Dheba" onclick="goToReference();" id="ref(6)">2017</a></b></p>
                            weakening of the adsorption capacity of the inhibitor
                            due to the hot-movement of inhibitor molecules from
                            the metal surface. The obtained result is in agreement
                            with reports of (Shivakumar and Mohana, 2012; Norzila and Ishak, 2015).
                            </p>
                            <p id="Temperatureeffectoninhibitionefficiency">
                                <b>Temperature effect on inhibition efficiency:</b>
                                The inhibition efficiency of the inhibitor for the carbon steel
                                decreases with increasing temperature, a trend that
                                confirm physical adsorption mechanism for the
                                corrosion process that is caused by desorption of
                                adsorbed inhibitor as a result of higher rate of hydrogen
                                evolution due to increased agitation of solution brought
                                by higher temperature. This is similar to the result
                                obtained by Abd El-hameed
                                <a href="#AbdEl-hameed" onclick="goToReference();" id="ref(1)">(2011)</a>
                                <a href="#figure2" onclick="goToFigure();" id="fig2">(Fig. 2)</a>.
                            </p>
                            <p id="Thermodynamicsandadsorptionstudies">
                                <b>Thermodynamics and adsorption studies:</b>
                                Thermodynamic properties such as Activation Energy
                                (Ea), Enthalpy (ΔH°) and Entropy of Activation (ΔS°)
                                were undertaken so as to ascertain the mechanism of
                                adsorption process involved in the carbon steel
                                corrosion process. In order to calculate the
                                thermodynamics parameters like enthalpy (ΔH<small>ads</small>) and
                                entropy (ΔS<small>ads</small>) of corrosion process in the presence and
                                absence of Okro leaf extract inhibitor in hydrochloric
                                acid solution the transition state theory equation given
                                by <a href="" id="eq4"> Eq. (4)</a> was used (Alhaffar <em>et al</em>.,
                                <a href="#Alhaffar" id="ref(3)_1" onclick="goToReference();">2018</a>; Ogoke <em>et
                                    al</em> .,
                                2009):
                            <p id="equation4">
                                $$ \log \left({\frac{C_R}{T}}\right) = \left[\log \left({\frac{R}{Nh}}\right) + \frac{\Delta
                                S^o}{2.303R}
                                \right] - \frac{\Delta H^o}{2.303R} $$
                            </p>
                            where, h is the Planck's constant (6.626176×10<sup>-34</sup>Js), N
                            is the Avogadro's number, (6.022×10<sup>23</sup> mol<sup>-1</sup>), R is the
                            Universal gas constant (8.314 J/Kmol) and T is the
                            temperature of the medium. The plot of log(C<sub>R</sub>/T)
                            against 1/T is seen to be linear in <a href="#figure3" onclick="goToFigure();" id="fig3">Fig.
                                3</a> from which
                            (ΔH°) and (ΔS°) values were calculated from the slopes

                            <p id="figure1" class="centerText">
                                <img src="{{ url('/images/389011(Fig1).png') }}" alt="figure1" width="400" height="250">
                            </p>
                            <p id="figure(1)Info" class="centerText">
                                <b>Fig. 1: Effect of temperature of corrosion rate of stainless steel</b>
                            </p>
                            <p id="figure2" class="centerText">
                                <img src="{{ url('/images/389011(Fig2).png') }}" alt="figure2" width="400" height="250">
                            </p>
                            <p id="figure(2)Info" class="centerText">
                                <b>Fig. 2: Effect of temperature on corrosion inhibition efficiency</b>
                            </p>
                            <p id="figure3" class="centerText">
                                <img src="{{ url('/images/389011(Fig3).png') }}" alt="figure3" width="400" height="250">
                            </p>
                            <p id="figure(3)Info" class="centerText">
                                <b>Fig. 3: Transition state plot for the corrosion inhibition of carbon steel</b>
                            </p>
                            <p id="table3" class="table-responsive">
                                <b>Table 3: Thermodynamics parameters for carbon steel in the presence and absence of
                                    inhibitor</b>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Concentration of Inhibitor</th>
                                        <th>Ea (kJ/mol)</th>
                                        <th>ΔH°(kJ/mol)</th>
                                        <th>ΔS°(J/mol/K)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Blank</td>
                                        <td>25.62</td>
                                        <td>22.89</td>
                                        <td>-131.29</td>
                                    </tr>
                                    <tr>
                                        <td>50 ppm</td>
                                        <td>51.27</td>
                                        <td>42.94</td>
                                        <td>-80.92</td>
                                    </tr>
                                    <tr>
                                        <td>100 ppm</td>
                                        <td>54.89</td>
                                        <td>48.09</td>
                                        <td>-68.09</td>
                                    </tr>
                                    <tr>
                                        <td>150 ppm</td>
                                        <td>54.55</td>
                                        <td>50.47</td>
                                        <td>-61.86</td>
                                    </tr>
                                    <tr>
                                        <td>200 ppm</td>
                                        <td>54.16</td>
                                        <td>50.97</td>
                                        <td>-61.00</td>
                                    </tr>
                                    <tr>
                                        <td>250 ppm</td>
                                        <td>57.93</td>
                                        <td>55.69</td>
                                        <td>-47.28</td>
                                    </tr>
                                </tbody>
                            </table>
                            </p>
                            and intercept of the graph respectively and listed in
                            <a href="#table3" onclick="goToTable" id="tb3">Table 3</a> . Arrhenius equation given by
                            <a href="" id="eq5">Eq. (5)</a>
                            was used to calculate the activation energy Ea in the presence and
                            absence of Okro leaf extract inhibitor:
                            <p id="equation5">
                                $$ \log C_{R} = \log A - \frac{E_{a}}{2.303R} $$
                            </p>
                            <p id="equation5(info)">
                                where, <br>
                                C<sub>R</sub> = The rate of corrosion <br>
                                E<sub>a</sub> = The apparent activation energy <br>
                                R = The universal gas constant <br>
                                T = The absolute temperature <br>
                                A = The frequency factor
                            </p>
                            <p id="figure4" class="centerText">
                                <img src="{{ url('/images/389011(Fig4).png') }}" alt="figure4" width="400" height="250">
                            </p>
                            <p id="figure(4)Info" class="centerText">
                                <b>Fig. 4: Arrhenius plot for corrosion of carbon steel in the presence and absence of
                                    inhibitor</b>
                            </p>
                            The Arrhenius plot of log CR against reciprocal of
                            absolute temperature (1/T) is shown in <a href="" id="fig4">Fig. 4</a> which
                            gives a straight line with slope of -Ea/2.303 R from
                            which the activation energy of the corrosion process
                            was determined and listed in <a href="" id="tb3(2)">Table 3</a>.
                            Table 3 shows the value of activation parameters
                            obtained in this study. It can be seen that the values of
                            corrosion enthalpy of adsorption (ΔH<sub>ads</sub>) increased with
                            inhibitor concentration of Okro leaf extract. The
                            enthalpy of activation (ΔH°) values in the presence and
                            absence of inhibitor are positive. From literature, the
                            negative sign of (ΔH°) has been clearly associated with
                            an exothermic adsorption process that can either be
                            physisorption or chemisorption or combination of both.
                            However, the positive sign is connected to endothermic
                            adsorption process which is credited to physisorption.
                            The positive sign of the enthalpy of activation as
                            obtained in the present study reflects the endothermic
                            nature of the process of carbon steel dissolution. This
                            supposition is in conformity with the observed decrease
                            in inhibition efficiency with temperature showing the
                            physisorption of the inhibitor on the carbon steel metal
                            surface. It was also observed that as inhibitor
                            concentration is increased the efficiency of inhibition
                            also increased. The entropy of adsorption (ΔS<sub>ads</sub>) values
                            decreased with inhibitor concentration. The activation
                            entropy (ΔS°) values in the absence and presence of
                            Okro leaf extract inhibitor were all negatives.
                            This implied to mean that the activated complex in
                            the rate determining step represents association rather
                            than dissociation step, indicating that during the
                            adsorption process, a decrease in the degree of
                            orderliness takes place when moving to the activated
                            complex from the reactants with increased in inhibitor
                            concentration, the order of activated complex entangled
                            in the rate determining step of the corrosion reaction
                            becomes more dissociated (Alhaffar <em>et al</em>., <a href="#Alhaffar"
                                onclick="goToReference();" id="ref(3)_1">2018</a>).
                            Hence, disorderliness is decreased as reactants are
                            transformed to activated complex.
                            The value of Ea (activation energy) in blank
                            solution is 25.62 kJ/mol and rise as inhibitor
                            concentration is increased from 50 ppm (51.28 kJ/mol)
                            to 100 ppm (54.89 kJ/mol). This is due to the physical
                            barrier produced by the adsorbed molecules on the
                            surface of carbon steel. This will increase the least
                            energy required for corrosion reaction to occurs. It was
                            observed that at both concentrations of 150 ppm and
                            200 ppm the activation energy of corrosion is 54.55
                            kJ/mol and 54.16 kJ/mol respectively which showed a
                            downward trend compared to 100 ppm concentration
                            but this is not lower in comparison to that of the blank
                            solution. It has been reported that lower Ea value in the
                            presence of inhibitors in comparison to the blank is
                            attributed to chemical adsorption (Solomon <em>et al</em>., 2010;
                            Thirumoolan <em>et al</em>., 2014; Alhaffar <em>et al</em>.,<a href="#Alhaffar" onclick="goToReference();" id="ref(3)_1">2018</a>). Since
                            the reverse is the case in this study it can be said that
                            the mechanism of corrosion can be ascribed to physical
                            adsorption (physisorption). At inhibitor concentration
                            of 250 ppm the activation energy value was increased
                            to 57.93 kJ/mol. The corrosion reaction will be pushed
                            away on the surface site and occurs at the uncovered
                            parts of carbon steel when inhibitor is added in
                            hydrochloric acid solution thus giving a higher value of
                            Ea (Quraishi <em>et al</em>., 2010).
                            The trend of increasing Ea values with inhibitor
                            concentrations has been reported by other researchers
                            on studies on various plant extract such as jujube leaves
                            (Sivakumar and Mohana, 2012), black pepper (Quraishi <em>et al</em>., 2010),
                            sunflower leaves (Hui <em>et al</em>., <a href="#Hui" onclick="goToReference();" id="ref(10)">2012</a>) and
                            piper nigrum extract (Norzila and Ishak, 2015). In this
                            study, the increasing values of Ea obviously showed a
                            physical adsorption of inhibitor molecules on the
                            surface carbon steel. Physical adsorption happens due
                            to the electrostatic force between negatively charged
                            metal surface and positive charged of organic species
                            (Norzila and Ishak, 2015).
                            <p id="figure5" class="centerText">
                                <img src="{{ url('/images/389011(Fig5).png') }}" alt="figure5" width="400" height="250">
                            </p>
                            <p id="figure(5)Info" class="centerText">
                                <b>Fig. 5: Langmuir isotherm for adsorption of inhibitor on carbon steel surface</b>
                            </p>
                            <p id="figure6" class="centerText">
                                <img src="{{ url('/images/389011(Fig6).png') }}" alt="figure6" width="400" height="250">
                            </p>
                            <p id="figure(6)Info" class="centerText">
                                <b>Fig. 6: Freundlich isotherm for adsorption of inhibitor on carbon steel surface</b>
                            </p>
                            </p>
                            <p id="Adsorptionisotherms">
                                <b>Adsorption isotherms:</b>
                                Four different adsorption
                                isotherms were tested so as to obtain more knowledge
                                about the interface between the carbon steel surface and
                                inhibitor. The isotherms tested are Langmuir,
                                Freundlich, Temkin and El-Awady adsorption
                                isotherms. The linear regression coefficient of
                                determination (R<sup>2</sup>) was used to adjudge the model that
                                best fit the experimental values.
                                Langmuir relationship is represented by Eq. (6):
                            <p id="equation6">
                                $$ \frac{C}{\theta} = \frac{1}{K} + C $$
                            </p>
                            where, K is the equilibrium constant of adsorption (M<sup>-1</sup>)
                            which was employed to obtain the Gibb’s free energy,
                            C is the inhibitor concentration ppm and 𝜃 is the degree
                            of surface coverage (Rajendran <em>et al</em>., 2000; Nnanna
                            <em>et al</em>., <a href="#Nnanna(2014)" onclick="goToReference();" id="ref(14)">2014</a>). A plot of C/𝜃 against C as depicted in Fig.5
                            gave a reciprocal of intercept as the adsorption constant.
                            Using the K value determined from the
                            Langmuir isotherm relationship, the standard Gibb’s
                            free energy of adsorption ΔG°<sub>ads</sub> (kJ/mol) value at temperature
                            range 35°C-75°C was determined according to Eq. (7) below:
                            <p id=equation7>
                                $$ \Delta G^o_{ads} = -RT\ln\left(55.5K\right) $$
                            </p>
                            <p id="equation7(info)">
                                where, <br>
                                R = The gas constant (8.314 J/mol) <br>
                                T = The temperature (K) <br>
                                55.5 = The standard molar of water in the solution (Cheng <em>et al</em>., <a href="#Cheng" onclick="goToReference();" id="ref(5)">2007</a>)
                            </p>
                            </p>
                            <p id="Freundlichisotherm">
                                <b>Freundlich isotherm: </b>
                                The fitting of non-ideal system
                                can be done sometimes by fitting the experimental data
                                to Freundlich adsorption isotherm as in Fig. 12 (Yaro
                                and Khadom, 2008). This is expressed in Eq. (8):
                            <p id="equation8">
                                $$ \theta = KC^n $$
                            </p>
                            Equation 11 can be re-written as:
                            <p id="equation9">
                                $$ \ln\theta = \ln{K} + n\ln{C} $$
                            </p>
                            <p id="figure7" class="centerText">
                                <img src="{{ url('/images/389011(Fig7).png') }}" alt="figure7" width="400" height="250">
                            </p>
                            <p id="figure(7)Info" class="centerText">
                                <b>Fig. 7: Temkin isotherm for adsorption of inhibitor on carbon steel surface</b>
                            </p>
                            A plot of ln 𝜃 against ln C should give a straight
                            line as seen in Fig. 6. Where 𝜃 is the degree of surface
                            coverage, C is the inhibitor concentration, in ppm, K is
                            the adsorption constant which is a measure of
                            adsorption capacity, (L/g) and n is the positive constant
                            called the Freundlich exponent which talks about the
                            intensity of adsorption process on the carbon steel
                            surface. Temkin isotherm: This is expressed in Eq. (10):
                            <p id="equation10">
                                $$ \theta = \frac{1}{f}\ln\left(K_{ads}C\right) $$
                            </p>
                            Equation 10 can be re-written as:
                            <p id="equation11">
                                $$ \theta = \frac{1}{f}\ln{C} + \frac{1}{f}\ln{K} $$
                            </p>
                            where, 𝜃 is a linear function of ln C (Nnanna <em>et al</em>., <a href="#Nnanna(2010)" onclick="goToReference();" id="ref(13)">2010</a>),
                            K is the equilibrium constant of adsorption,
                            (L/g), C is the inhibitor concentration, (g/L) and f is a
                            coefficient of inhomogeneity connected with the range
                            of inhomogeneity C by Eq. (12):
                            <p id="equation12">
                                $$ f = \frac{C}{RT} $$
                            </p>
                            A plot of 𝜃 against lnC gives a straight line as
                            indicated in Fig. 7, if Temkin isotherm is follow.
                            </p>
                            <p id="El-Awadyisotherm">
                                <b>El-Awady isotherm: </b>
                                This model is also referred to as
                                the kinetic/thermodynamic model and is written as follows:
                            <p id="equation13">
                                $$ \log\left(\frac{\theta}{1 - \theta}\right) = \log{K} + y\log{C} $$
                            </p>
                            <p id="equation13(info)">
                                where, <br>
                                y = The number of inhibitor molecules occupying one active site of the metal surface <br>
                                𝜃 = The degree of surface coverage <br>
                                C = The inhibitor concentration, ppm
                            </p>
                            A plot of log(𝜃/1-𝜃) against logC as shown in Fig.8
                            can be used to determine the associated parameters
                            such as the reciprocal of y which is used to describe the
                            number of active sites on the surface occupied by one
                            molecule of the inhibitor. It can be related to the
                            binding constant, B, according to Eq. (14):
                            <p id="equation14">
                                $$ B = K ^ {1/y} $$
                            </p>
                            When 1/y>1, each inhibitor molecule is believed to
                            occupying more than one active site on the metal
                            surface and vice-versa (Fouda and Ellithy, <a href="#Fouda" onclick="goToReference();" id="ref(8)">2009</a>).
                            Based on Table 4 to 7, the R<sup>2</sup> values obtained from
                            the linear regression of the experimental data showed
                            they are close to unity which revealed that the
                            adsorption of Okro leaf extract molecules onto the
                            surface of carbon steel is strongly fitted to Langmuir,
                            Temkin and Freundlich isotherms. Though, the
                            Langmuir plot is linear with good correlation
                            coefficient values, the slopes are greater than 1 this
                            indicates a variation from an ideal Langmuir adsorption
                            equation (Alhaffar <em>et al</em>., <a href="#Alhaffar" onclick="goToReference();" id="ref(3)_1">2018</a> ; Solomon <em>et al</em>., 2010). It
                            can be inferred that there is an interaction between
                            surface of carbon steel metal and species of adsorbed
                            inhibitor molecules. The value of intensity of
                            adsorption shown in Table 5 from Freundlich isotherm
                            is less than unity which specify that the adsorption is
                            moderate. The adsorption capacity (K<sub>ads</sub>) of the
                            inhibitor decreased as temperature is increased which
                            shows the reaction is exothermic in nature.
                            Table 6 gives the Temkin isotherm model
                            parameters where the effect of indirect adsorbate
                            <p id="figure8" class="centerText">
                                <img src="{{ url('/images/389011(Fig8).png') }}" alt="figure8" width="400" height="250">
                            </p>
                            <p id="figure(8)Info" class="centerText">
                                <b>Fig. 8: El-Awady isotherm for adsorption of inhibitor on carbon steel surface</b>
                            </p>
                            <p id="table4" class="table-responsive">
                                <b>Table 4: Langmuir adsorption isotherms parameters</b>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Temperature, (K)</th>
                                        <th>K<sub>ads</sub></th>
                                        <th>R<sup>2</sup></th>
                                        <th>ΔG (KJ/mol)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>308</td>
                                        <td>0.088</td>
                                        <td>0.998</td>
                                        <td>-4.061</td>
                                    </tr>
                                    <tr>
                                        <td>318</td>
                                        <td>0.091</td>
                                        <td> 0.9997</td>
                                        <td>-4.281</td>
                                    </tr>
                                    <tr>
                                        <td>328</td>
                                        <td>0.084</td>
                                        <td>0.9997</td>
                                        <td>-4.198</td>
                                    </tr>
                                    <tr>
                                        <td>338</td>
                                        <td>0.053</td>
                                        <td>0.9978</td>
                                        <td>-3.01</td>
                                    </tr>
                                    <tr>
                                        <td>348</td>
                                        <td>0.026</td>
                                        <td>0.9949</td>
                                        <td>-1.061</td>
                                    </tr>
                                </tbody>
                            </table>
                            </p>
                            <p id="table5" class="table-responsive">
                                <b>Table 5: Freundlich adsorption isotherm parameters</b>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Temperature, (K)</th>
                                        <th>K<sub>ads</sub></th>
                                        <th>R<sup>2</sup></th>
                                        <th>n</th>
                                        <th>ΔG (KJ/mol)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>308</td>
                                        <td>0.647</td>
                                        <td>0.8867</td>
                                        <td>0.0612</td>
                                        <td>-9.17</td>
                                    </tr>
                                    <tr>
                                        <td>318</td>
                                        <td>0.546</td>
                                        <td>0.9065</td>
                                        <td>0.0962</td>
                                        <td>-9.02</td>
                                    </tr>
                                    <tr>
                                        <td>328</td>
                                        <td>0.508</td>
                                        <td>0.9646</td>
                                        <td>0.1096</td>
                                        <td>-9.11</td>
                                    </tr>
                                    <tr>
                                        <td>338</td>
                                        <td>0.453</td>
                                        <td>0.967</td>
                                        <td>0.0967</td>
                                        <td>-9.06</td>
                                    </tr>
                                    <tr>
                                        <td>348</td>
                                        <td>0.241</td>
                                        <td>0.9314</td>
                                        <td>0.1799</td>
                                        <td>-7.50</td>
                                    </tr>
                                </tbody>
                            </table>
                            </p>
                            <p id="table6" class="table-responsive">
                                <b>Table 6: Temkin adsorption isotherm parameters</b>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Temperature, (K)</th>
                                        <th>K<sub>ads</sub></th>
                                        <th>R<sup>2</sup></th>
                                        <th>f</th>
                                        <th>ΔG (KJ/mol)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>308</td>
                                        <td>4,448.5</td>
                                        <td>0.9133</td>
                                        <td>15.29</td>
                                        <td>-31.79</td>
                                    </tr>
                                    <tr>
                                        <td>318</td>
                                        <td>257.89</td>
                                        <td>0.9308</td>
                                        <td>11.90</td>
                                        <td>-25.29</td>
                                    </tr>
                                    <tr>
                                        <td>328</td>
                                        <td>164.54</td>
                                        <td>0.9456</td>
                                        <td>11.53 </td>
                                        <td>-24.87</td>
                                    </tr>
                                    <tr>
                                        <td>338</td>
                                        <td>253.22</td>
                                        <td>0.9278</td>
                                        <td>14.33</td>
                                        <td>-26.84</td>
                                    </tr>
                                    <tr>
                                        <td>348</td>
                                        <td>2.76</td>
                                        <td>0.9193</td>
                                        <td>10.13</td>
                                        <td>-14.55</td>
                                    </tr>
                                </tbody>
                            </table>
                            </p>
                            <p id="table7" class="table-responsive">
                                <b>Table 7: El-Awady adsorption isotherm parameters</b>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Temperature, (K)</th>
                                        <th>K<sub>ads</sub></th>
                                        <th>R<sup>2</sup></th>
                                        <th>y</th>
                                        <th>1/y</th>
                                        <th>B</th>
                                        <th>ΔG (KJ/mol)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>308</td>
                                        <td>0.4321</td>
                                        <td>0.8572</td>
                                        <td>0.5675</td>
                                        <td>1.762</td>
                                        <td>0.23</td>
                                        <td>-8.140</td>
                                    </tr>
                                    <tr>
                                        <td>318</td>
                                        <td>0.232</td>
                                        <td>0.9476</td>
                                        <td>0.7155</td>
                                        <td>1.398</td>
                                        <td>0.129</td>
                                        <td>-6.76</td>
                                    </tr>
                                    <tr>
                                        <td>328</td>
                                        <td>0.238</td>
                                        <td>0.9596</td>
                                        <td>0.6879</td>
                                        <td>1.454</td>
                                        <td>0.124</td>
                                        <td>-7.04</td>
                                    </tr>
                                    <tr>
                                        <td>338</td>
                                        <td>0.483</td>
                                        <td>0.9119</td>
                                        <td>0.3515</td>
                                        <td>2.845</td>
                                        <td>0.126</td>
                                        <td>-9.24</td>
                                    </tr>
                                    <tr>
                                        <td>348</td>
                                        <td>0.393</td>
                                        <td>0.9188</td>
                                        <td>0.4055</td>
                                        <td>2.466</td>
                                        <td>0.099</td>
                                        <td>-8.92</td>
                                    </tr>
                                </tbody>
                            </table>
                            </p>
                            (inhibitor)/adsorbate (inhibitor) interactions with the
                            metal surface on the adsorption process was confirmed.
                            Generally, the coefficient of inhomogeneity (f)
                            decreases except at 338 K. The Gibb’s free energy of
                            adsorption (ΔG°<sub>ads</sub>) values obtained pointed towards
                            chemisorption which is nature of Temkin isotherm. It
                            means that there is a charge sharing or transfer from the
                            inhibitor molecules to the metal surface to form a coordinate
                            type of bond (Popova <em>et al</em>., 2003).
                            From Table 7, the value of 1/y obtained for the
                            inhibitor is >1 which showed each molecule of the
                            inhibitor is believed to occupy more than one active site
                            on the carbon steel metal surface (Fouda and Ellithy, <a href="#Fouda" onclick="goToReference();" id="ref(8)">2009</a>).
                            Similar results on value of y were reported by
                            Umoren <em>et al</em>. (2008) and Umoren <em>et al</em>. (2009). The
                            K<sub>ads</sub> obtained in this study decreased with increase in
                            temperature, indicating possible decrease in the rate of
                            Okro leaf extract molecules condensation on the carbon
                            steel surface probably due to high temperature which
                            brought desorption corroborating (Ituen <em>et al</em>., <a href="#Ituen" onclick="goToReference();" id="ref(11)"> 2017</a>).
                            As indicated in Table 7, the binding constant (B)
                            decreases as temperature increases which shows that
                            the interaction of inhibitor molecules on the metal
                            surface decrease as a result of co-ordinate bond. The
                            calculated values of ΔG°<sub>ads</sub> listed in Table 4, 5 and 7 are
                            in the range -1.061-9.24 kJ/mol these values indicates
                            <p id="table8" class="table-responsive">
                                <b>Table 8: Experimental data for observed, predicted and residual on corrosion process</b>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Run order</th>
                                        <th>X<sub>1</sub> , (ppm)</th>
                                        <th>X<sub>2</sub>, (Hr)</th>
                                        <th>X<sub>3</sub>, (°C)</th>
                                        <th>Actual value</th>
                                        <th>Predicted values</th>
                                        <th>Residual</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>-1</td>
                                        <td>+1</td>
                                        <td>0</td>
                                        <td>0.638</td>
                                        <td>0.64</td>
                                        <td>-0.00475</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>+1</td>
                                        <td>-1</td>
                                        <td>0.22</td>
                                        <td>0.21</td>
                                        <td>0.014</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0.244</td>
                                        <td>0.24</td>
                                        <td>0.0018</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0.243</td>
                                        <td>0.24</td>
                                        <td>0.0008</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>+1</td>
                                        <td>+1</td>
                                        <td>0</td>
                                        <td>0.399</td>
                                        <td>0.4</td>
                                        <td>0.002</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0.241</td>
                                        <td>0.24</td>
                                        <td>-0.0012</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>+1</td>
                                        <td>-1</td>
                                        <td>0</td>
                                        <td>0.084</td>
                                        <td>0.079</td>
                                        <td>0.00475</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>0</td>
                                        <td>+1</td>
                                        <td>+1</td>
                                        <td>0.882</td>
                                        <td>0.89</td>
                                        <td>-0.011</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>0</td>
                                        <td>-1</td>
                                        <td>0</td>
                                        <td>0.054</td>
                                        <td>0.043</td>
                                        <td>0.011</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>0</td>
                                        <td>-1</td>
                                        <td>+1</td>
                                        <td>0.204</td>
                                        <td>0.22</td>
                                        <td>-0.014</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>-1</td>
                                        <td>-1</td>
                                        <td>0</td>
                                        <td>0.12</td>
                                        <td>0.12</td>
                                        <td>-0.002</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>+1</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0.084</td>
                                        <td>0.1</td>
                                        <td>-0.016</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>+1</td>
                                        <td>0</td>
                                        <td>+1</td>
                                        <td>0.459</td>
                                        <td>0.45</td>
                                        <td>0.008875</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>-1</td>
                                        <td>0</td>
                                        <td>+1</td>
                                        <td>0.69</td>
                                        <td>0.67</td>
                                        <td>0.016</td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0.241</td>
                                        <td>0.24</td>
                                        <td>-0.0012</td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0.242</td>
                                        <td>0.24</td>
                                        <td>-0.0002</td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>-1</td>
                                        <td>0</td>
                                        <td>-1</td>
                                        <td>0.155</td>
                                        <td>0.16</td>
                                        <td>-0.008875</td>
                                    </tr>
                                </tbody>
                            </table>
                            </p>
                            <p id="table9" class="table-responsive">
                                <b>Table 9: Analysis of variance (ANOVA) of regression equation</b>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Sources</th>
                                        <th>Sum of squares</th>
                                        <th>Df</th>
                                        <th>Mean square</th>
                                        <th>F-values</th>
                                        <th>Prob>F, p-value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>RSM model</td>
                                        <td>0.88</td>
                                        <td>9</td>
                                        <td>0.098</td>
                                        <td>519.78</td>
                                        <td>
                                            < 0.0001 Significant </td>
                                    </tr>
                                    <tr>
                                        <td>Residual</td>
                                        <td>0.001314 </td>
                                        <td>7</td>
                                        <td>0.0001876</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Lack of fit</td>
                                        <td>0.001307</td>
                                        <td>3</td>
                                        <td>0.0004356</td>
                                        <td>256.23</td>
                                        <td>
                                            < 0.0001 Significant</td>
                                    </tr>
                                    <tr>
                                        <td>Pure error</td>
                                        <td>0.0000068</td>
                                        <td>4</td>
                                        <td>0.0000017</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Cor total</td>
                                        <td>0.88</td>
                                        <td>16</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>R-squared</td>
                                        <td>0.9985</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Predicted R-squared</td>
                                        <td>0.9762</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Adjusted R-squared</td>
                                        <td>0.9966</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Adequate precision</td>
                                        <td>80.880</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                </tbody>
                            </table>
                            </p>
                            spontaneous adsorption of inhibitor molecules on the
                            metal surface. These values are less negative than -20
                            kJ/mol, from literature value of ΔG°<sub>ads</sub>= -20 kJ/mol or
                            less shows physisorption that involved electrostatic
                            interaction between charged molecules whereas those in
                            the order of -21 to -40 kJ/mol or more is taken as
                            chemisorption that involved transfer or sharing of
                            charge from the inhibitor to the surface of metal to form
                            a kind of co-ordinate bond (Yaro and Khadom, 2008; Roy <em>et al</em>., 2014).
                            From the values of ΔG°<sub>ads</sub> obtained in this study, it
                            can be suggested that mechanisms of adsorption of Okro leaf extract
                            on carbon steel surface might involve two types of interface namely
                            physisorption and chemisorption. It can be said that adsorption occurred
                            first on the metal surface due to physisorption as a
                            result of effective adsorption of molecules of water on
                            the surface of carbon steel. The unused part of the water
                            molecules adsorbed on the metal surface is
                            complemented by a chemical interaction between the
                            metal surface and the inhibitor that showed
                            chemisorption adsorption process.
                            </p>
                            <p id="Optimizationofcorrosionprocessoncarbonsteel">
                                <b>Optimization of corrosion process on carbon steel: </b>
                                Table 8 shows the experimental data for the predicted,
                                observed and residual values obtained, the small values
                                of the residual indicate that the data from the
                                experiment fitted well to the quadratic model used.
                                Also, results of the Analysis of Variance (ANOVA) as
                                presented in Table 9 showed the model used was
                                significant with F-value of 519.78 and with a
                                corresponding low p-value (p < 0.00010). For the model to be adjudged to be of good fit
                                    R<sup>2</sup>
                                    value should be at least 0.80 (Guan and Yao, <a href="#Guan" onclick="goToReference();" id="ref(9)">2008</a>).
                                    The coefficient of determination (R<sup>2</sup>) value of 0.9985
                                    (Fig. 9) gotten showed the good fit of the model which
                                    indicates the sample variation of 99.85% dependent
                                    variable was ascribed to the independent factors and
                                    also it can be seen that only 015% of the total variation
                                    could not be elucidated by the model. Figure 10 give
                                    the normal plot of residual that shows little deviations
                                    from the normal revealing the good fit of the model.
                                    The larger value of lack of fit indicate the model is
                                    significant. Therefore, it can be suggested that the
                                    model obtained could be used in theoretical prediction
                                    of the dependent variable (Betiku and Adesina, <a href="#Betiku" onclick="goToReference();" id="ref(4)">2013</a>).
                                    Table 10 depicts the result of test of significance for all
                                    the coefficient of regression. It showed that the p-values
                                    of the model terms X<sub>1</sub> , X<sub>2</sub>, X<sub>3</sub>,
                                    X<sub>1</sub>X<sub>2</sub>, X<sub>1</sub>X<sub>3</sub>, X<sub>2</sub>X<sub>3</sub>,
                                    X<sub>1</sub><sup>2</sup>, X<sub>2</sub><sup>2</sup> and X<sub>3</sub><sup>2</sup> were
                                    significant at 5% confidence
                                    level (p < 0.5). The model equation in terms of coded factors for the prediction of
                                        weight loss of carbon steel is expressed in Eq. (15) Table 11: <p id="equation15">
                                        $$
                                        Weight loss=0.24 – 0.072 X_{1} + 0.21 X_{2} + 0.22 X_{3} \\
                                        – 0.051 X_{1}X_{2}, - 0.040 X_{1}X_{3} + 0.13 X_{2}X_{3} + \\
                                        0.038 X_{1}^2+ 0.031 X_{2}^2 + 0.067 X_{3}^2
                                        $$
                            </p>
                            Figure 11 to 13 describes the surface plot for the
                            weight loss of carbon steel corrosion process using
                            Okro leaf extract as inhibitor. It was used to give an
                            important evidence on the system behaviour within the
                            experimental design on the corrosion of carbon steel
                            using Okro leaf as an inhibitor. The different shapes of
                            <p id="table10" class="table-responsive">
                                <b>Table 10: Test of significance for coefficient of regression</b>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Sources</th>
                                        <th>Sum of squares</th>
                                        <th>Df</th>
                                        <th>Mean square</th>
                                        <th>F-values</th>
                                        <th>Prob>F, p-value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>X<sub>1</sub></td>
                                        <td>0.042</td>
                                        <td>1</td>
                                        <td>0.042</td>
                                        <td>221.78</td>
                                        <td>
                                            < 0.0001</td>
                                    </tr>
                                    <tr>
                                        <td>X<sub>2</sub></td>
                                        <td>0.35 </td>
                                        <td>1</td>
                                        <td>0.35</td>
                                        <td>1873.39</td>
                                        <td>
                                            < 0.0001</td>
                                    </tr>
                                    <tr>
                                        <td>X<sub>1</sub>X<sub>2</sub></td>
                                        <td>0.01</td>
                                        <td>1</td>
                                        <td>0.01</td>
                                        <td>54.90</td>
                                        <td>0.0001</td>
                                    </tr>
                                    <tr>
                                        <td>X<sub>1</sub>X<sub>3</sub></td>
                                        <td>0.0064</td>
                                        <td>1</td>
                                        <td>0.0064</td>
                                        <td>34.11</td>
                                        <td>0.0006</td>
                                    </tr>
                                    <tr>
                                        <td>X<sub>2</sub>X<sub>3</sub></td>
                                        <td>0.066</td>
                                        <td>1</td>
                                        <td>0.066</td>
                                        <td>349.25</td>
                                        <td>
                                            < 0.0001</td>
                                    </tr>
                                    <tr>
                                        <td>X<sub>1</sub>X<sup>2</sup></td>
                                        <td>0.005929</td>
                                        <td>1</td>
                                        <td>0.005929</td>
                                        <td>31.60</td>
                                        <td>0.0008</td>
                                    </tr>
                                    <tr>
                                        <td>X<sub>2</sub>X<sup>2</sup></td>
                                        <td>0.0003923</td>
                                        <td>1</td>
                                        <td>0.0003923</td>
                                        <td>20.91</td>
                                        <td>0.0026</td>
                                    </tr>
                                    <tr>
                                        <td>X<sub>3</sub>X<sup>2</sup></td>
                                        <td>0.019</td>
                                        <td>1</td>
                                        <td>0.019</td>
                                        <td>101.55</td>
                                        <td>
                                            < 0.0001</td>
                                    </tr>
                                </tbody>
                            </table>
                            </p>
                            <p id="table11" class="table-responsive">
                                <b>Table 11: Optimization objective</b>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Constraints</th>
                                        <th>Goal</th>
                                        <th>Lower limit</th>
                                        <th>Upper limit </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Concentration of inhibitor</td>
                                        <td>In range</td>
                                        <td>50</td>
                                        <td>250</td>
                                    </tr>
                                    <tr>
                                        <td>Contact time</td>
                                        <td>In range</td>
                                        <td>2</td>
                                        <td>12</td>
                                    </tr>
                                    <tr>
                                        <td>Temperature</td>
                                        <td>In range</td>
                                        <td>35</td>
                                        <td>55</td>
                                    </tr>
                                </tbody>
                            </table>
                            </p>
                            <p id="figure9" class="centerText">
                                <img src="{{ url('/images/389011(Fig9).png') }}" alt="figure9" width="400" height="250">
                            </p>
                            <p id="figure(9)Info" class="centerText">
                                <b>Fig. 9: Plot of experimental and predicted</b>
                            </p>
                            <p id="figure10" class="centerText">
                                <img src="{{ url('/images/389011(Fig10).png') }}" alt="figure10" width="400" height="250">
                            </p>
                            <p id="figure(10)Info" class="centerText">
                                <b>Fig. 10: Normal plot for the residual</b>
                            </p>
                            the contour plots indicated different interactions
                            between the variables. An elliptical contour plot
                            indicated interactions between the variables were
                            significant while a circular contour plot means
                            otherwise (Zhao <em>et al</em>., 2012). It can be seen in Fig. 11
                            that as concentration increases with contact time the
                            weight loss of carbon steel decreases.
                            This can be as a result of higher adsorption of
                            active inhibitor molecules from the extract on the metal
                            surface forming a thin film on the metal surface thus
                            preventing further attack from the corrosive
                            environment. This in turn reduced the weight loss by
                            specimen, which agrees with the findings of Yawas
                            (2005) and Nwabanne and Okafor (2011). Figure 12
                            shows the interaction of concentration, temperature and
                            weight loss. It can be deduced that the protective films
                            of the inhibitor formed on the surface of the carbon
                            steel are less stable at higher temperature thus leading
                            to reduced weight loss at higher temperature. This may
                            be due to desorption of some adsorbed molecules from
                            the carbon steel surface at higher temperature thereby
                            making the greater area of carbon steel to be exposed to
                            attack from the acidic environment. Figure 13 revealed
                            that at lower temperature and contact time, the weight
                            loss of the carbon steel reduces. The Optimization tool
                            of Design Expert 7.00 was used for the optimization.
                            The goal of the optimization is to minimize the weight
                            loss of carbon steel using the constraints shown in
                            Table 11. The predicted optimal condition was; 198.71
                            ppm 2.04 h and 40.29°C for the concentration of
                            inhibitor, contact time, temperature respectively while
                            0.045 g was the least weight loss predicted. The
                            predicted optimum condition of the model was
                            validated by conducting three replicates of experiments
                            in the laboratory, 0.051 g weight loss of carbon steel
                            was obtained which is in the range of the predicted
                            value by the model equation.
                            </p>
                        </div>
                    </div>
                    <div class="row" id="Conclusion">
                        <div class="col-sm-12">
                            <h3 id="heading">
                                Conclusion
                            </h3>
                        </div>
                        <div class="col-sm-12" id="Body">
                            <p>
                                In the present study, Okro leaf was extracted and
                                characterized using phytochemical test and was used as
                                an inhibitor. The effects of corrosion inhibition of the
                                Okro leaf extract for carbon steel in 1.5M HCl solution
                            </p>
                            <p id="figure11" class="centerText">
                                <img src="{{ url('/images/389011(Fig11).png') }}" alt="figure11" width="400" height="250">
                            </p>
                            <p id="figure(11)Info" class="centerText">
                                <b>Fig. 11: Surface plot for the effect of contact time, inhibitor concentration on weight
                                    loss of carbon steel</b>
                            </p>
                            <p id="figure12" class="centerText">
                                <img src="{{ url('/images/389011(Fig12).png') }}" alt="figure12" width="400" height="250">
                            </p>
                            <p id="figure(12)Info" class="centerText">
                                <b>Fig. 12: Surface plot for the effect of temperature and inhibitor concentration on weight
                                    loss of carbon steel</b>
                            </p>
                            <p id="figure13" class="centerText">
                                <img src="{{ url('/images/389011(Fig13).png') }}" alt="figure13" width="400" height="250">
                            </p>
                            <p id="figure(13)Info" class="centerText">
                                <b>Fig. 13: Surface plot for the effect of temperature and contact time on weight loss of
                                    carbon steel</b>
                            </p>
                            <p>
                                was estimated using the gravimetric technique.
                                Thermodynamic, adsorption and optimization studies
                                were also carried out to estimate the binding/adsorption
                                mechanism of the inhibitor molecules on the surface of
                                the carbon steel. The corrosion rate decreased as
                                inhibitor concentration is increased. The corrosion
                                inhibition performance of Okro leaf extract is found to
                                depend on its concentration and temperature. Corrosion
                                inhibition of the Okro leaf extract on carbon steel
                                surface occurred by the physical adsorption mechanism.
                                This was evidenced with the values of activation energy
                                obtained in the inhibited medium which is higher than
                                that obtained in the blank solution. In addition, the rate
                                of corrosion was maximum in the blank solution since
                                it is devoid of inhibitor that can impede the corrosion
                                deterioration process. The effects of inhibitor
                                concentration, contact time and temperature on weight
                                loss of carbon steel is carried out using Response
                                Surface Methodology (RSM). It was established that all
                                the variables considered are significant factors on the
                                corrosion inhibition process. Second-order
                                mathematical model fitted well to the experimental data
                                obtained. The optimum condition that was established
                                were; 198.71 ppm 2.04 h and 40.29°C for the
                                concentration of inhibitor, contact time, temperature
                                respectively. The activation enthalpy of the corrosion
                                process increases from 22.89 kJ/mol to 55.69 kJ/mol.
                                The positive values of the enthalpy of the corrosion
                                system signified an endothermic adsorption process.
                                The activation entropy (ΔS°) values in the absence and
                                presence of inhibitor were all negatives. This implied to
                                mean that the activated complex in the rate -
                                determining step represents association rather than
                                dissociation step, indicating that during the adsorption
                                process, a decrease in the degree of orderliness takes
                                place. Experimental data fitted well to Langmuir,
                                Freundlich and El-Awady isotherms. However, mixed
                                type adsorption mechanisms were confirmed on
                                corrosion inhibition of Okro leaf extract on the carbon
                                steel surface. The adsorption process is spontaneous
                                with the negative value of ΔG°<sub>ads</sub> obtained.
                            </p>
                        </div>
                    </div>
                    <div class="row" id="ConflictsofInterest">
                        <div class="col-sm-12">
                            <h3 id="heading">
                                Conflicts of Interest
                            </h3>
                        </div>
                        <div class="col-sm-12" id="Body">
                            <p>
                                This research article is an original work of the
                                authors and was carried out by the authors. The authors
                                declare no conflict of interest in whatsoever form.
                            </p>
                        </div>
                    </div>
                    <div class="row" id="Affiliation">
                        <div class="col-sm-12">
                            <h3 id="heading">
                                Author Details 
                            </h3>
                        </div>
                        <div class="col-sm-12 body">
                            <h3>
                                Affiliations
                            </h3>
                        </div>
                        <div class="col-sm-12 body font-weight-bold" id="affliation_1">
                            Department of Chemical Engineering, Federal University of Petroleum Resources, 
                            Effurun, Delta State, Nigeria
                        </div>
                        <div class="col-sm-12 body" id="affliation_1_author_1">
                            A.O. Okewale, C.N. Owabor
                        </div>
                        <div class="col-sm-12 body font-weight-bold" id="affliation_2">
                            Department of Petroleum and Natural Gas Processing Engineering, 
                            Petroleum Training Institute, Effurun, Delta State, Nigeria
                        </div>
                        <div class="col-sm-12 body" id="affliation_2_author_1">
                            J.G. James
                        </div>
                        <div class="col-sm-12 body">
                            <h3>
                                Corresponding Author
                            </h3>
                        </div>
                        <div class="col-sm-12 body" id="CorrespondingAuthor">
                            Correspondence to <a href="">A.O. Okewale</a>
                        </div>
                    </div>
                    <div class="row" id="References">
                        <div class="col-sm-12">
                            <h3 id="heading">
                                References
                            </h3>
                        </div>
                        <div class="col-sm-12" id="Body">

                            {{-- Reference 1 --}}
                            <div class="row">
                                <div class="col-sm-12" id="AbdEl-hameed">
                                    Abd El-hameed, R.S., 2011. Aminolysis of
                                    polyethylene terephthalate waste as corrosion
                                    inhibitor for carbon steel in HCL corrosive
                                    medium. Adv. Appl. Sci. Res., 2(3): 483-499.
                                </div>
                            </div>

                            {{-- Reference 2 --}}
                            <div class="row">
                                <div class="col-sm-12" id="Adepoju">
                                    Adepoju, T.F. and U.P. Eyibio, 2016. Study on oil
                                    extraction from Citrullus Lanatus (C. lanatus)
                                    oilseed and its statistical analysis: A case of
                                    Response Surface Methodology (RSM) and
                                    Artificial Neural Network (ANN). Chem. Res. J.,
                                    1: 28-36.
                                </div>
                            </div>
                            {{-- Reference 3 --}}
                            <div class="row">
                                <div class="col-sm-12" id="Alhaffar">
                                    Alhaffar, M.T., S.A. Umoren, I.B. Obot and S.A. Ali,
                                    2018. Isoxazolidine derivatives as corrosion
                                    inhibitors for low carbon steel in HCl solution:
                                    Experimental, theoretical and effect of KI studies.
                                    RSC Adv., 8: 1764-1777.
                                </div>
                            </div>
                            {{-- Reference 4 --}}
                            <div class="row">
                                <div class="col-sm-12" id="Betiku">
                                    Betiku, E. and O.A. Adesina, 2013. Statistical approach
                                    to the optimization of citric acid production using
                                    filamentous fungus Aspergillus Niger grown on
                                    sweet potato starch hydrolyzate. Biomass
                                    Bioenerg., 55: 350-354.
                                </div>
                            </div>
                            {{-- Reference 5 --}}
                            <div class="row">
                                <div class="col-sm-12" id="Cheng">
                                    Cheng, S., S. Chen, T. Liu, X. Chang and Y. Yin, 2007.
                                    Carboxymenthylchitosan as an ecofriendly
                                    inhibitor for mild steel in 1 M HCl. Mater. Lett.,
                                    61(14-15): 3276-3280.
                                </div>
                            </div>
                            {{-- Reference 6 --}}
                            <div class="row">
                                <div class="col-sm-12" id="Dheba">
                                    Dheba, M.A., M.E. Salem and A. Khaled, 2017.
                                    Phytochemical screening of abelmoschus
                                    esculentus from Leptis area at Al-Khums Libya.
                                    Int. J. Chem. Sci., 1(2): 48-53.
                                </div>
                            </div>
                            {{-- Reference 7 --}}
                            <div class="row">
                                <div class="col-sm-12" id="ElMaghraby">
                                    El Maghraby, A.A., 2009. Corrosion inhibition of
                                    aluminum in hydrochloric acid solution using
                                    potassium iodate inhibitor. Open Corrosion J., 2(1):
                                    189-196.
                                </div>
                            </div>
                            {{-- Reference 8 --}}
                            <div class="row">
                                <div class="col-sm-12" id="Fouda">
                                    Fouda, A.S. and A.S. Ellithy, 2009. Inhibition effect of
                                    4-phenylthiazole derivatives on corrosion of 304L
                                    stainless steel in HCl solution. Corrosion Sci.,
                                    51(4): 868-875.
                                </div>
                            </div>
                            {{-- Reference 9 --}}
                            <div class="row">
                                <div class="col-sm-12" id="Guan">
                                    Guan, X. and H. Yao, 2008. Optimization of viscozyme
                                    L-assisted extraction of oat bran protein using
                                    response surface methodology. Food Chem.,
                                    106(1): 345-351.
                                </div>
                            </div>
                            {{-- Reference 10 --}}
                            <div class="row">
                                <div class="col-sm-12" id="Hui">
                                    Hui, C., S. Wenyan, S. Jinling and X. Qi, 2012. Study
                                    of Stevia Rebaudiana leaves as green corrosion
                                    inhibitor for mild steel in sulphuric acid by
                                    electrochemical techniques. Int. J. Electrochem.
                                    Sci., 7(4): 3726-3736.
                                </div>
                            </div>
                            {{-- Reference 11 --}}
                            <div class="row">
                                <div class="col-sm-12" id="Ituen">
                                    Ituen, E., O. Akaranta and A. James, 2017. Evaluation
                                    of performance of corrosion inhibitors using
                                    adsorption isotherm models: An overview. Chem.
                                    Sci. Int. J., 18(1): 1-34.
                                </div>
                            </div>
                            {{-- Reference 12 --}}
                            <div class="row">
                                <div class="col-sm-12" id="Njoku">
                                    Njoku, E.R., 1998. Effect of Inhibitors on Corrosion of
                                    Mild Steel in HCL Pickling Solution. M.Sc. Thesis,
                                    Department of Metallurgical Engineering, ABU,
                                    Zaria Nigeria.
                                </div>
                            </div>
                            {{-- Reference 13 --}}
                            <div class="row">
                                <div class="col-sm-12" id="Nnanna(2010)">
                                    Nnanna, L.A., B.N. Onwuagba, I.M. Mejeha and K.B.
                                    Okeoma, 2010. Inhibition effects of some plant
                                    extracts on the acid corrosion of aluminium alloy.
                                    Afr. J. Pure Appl. Chem., 4(1): 011-016.
                                </div>
                            </div>
                            {{-- Reference 14 --}}
                            <div class="row">
                                <div class="col-sm-12" id="Nnanna(2014)">
                                    Nnanna, L.A., K.O. Uchendu, F.O. Nwosu, U.
                                    Ihekoronye and E.P. Eti, 2014. Gmelina Arborea
                                    Bark Extracts as a Corrosion Inhibitor for mild
                                    steel in an acidic environment. Int. J. Mater.
                                    Chem., 4(2): 34-39.
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="row" id="Rights_and_permissions">
                        <div class="col-sm-12">
                            <h3 id="heading">
                                Rights And permissions 
                            </h3>
                        </div>
                        <div class="col-sm-12 body">
                            <b>Open Access</b> This article is licensed under a Creative Commons Attribution 4.0 International 
                            License, which permits use, sharing, adaptation, distribution and reproduction 
                            in any medium or format, as long as you give appropriate credit to the original 
                            author(s) and the source, provide a link to the Creative Commons license, and 
                            indicate if changes were made. The images or other third-party material in this 
                            article are included in the article’s Creative Commons license, unless indicated 
                            otherwise in a credit line to the material. If material is not included in the 
                            article’s Creative Commons license and your intended use is not permitted by 
                            statutory regulation or exceeds the permitted use, you will need to obtain 
                            permission directly from the copyright holder. To view a copy of this license, 
                            visit <a href="http://creativecommons.org/licenses/by/4.0/">http://creativecommons.org/licenses/by/4.0/</a> 
                        </div>
                    </div>
                    <div class="row" id="CiteArtilce">
                        <div class="col-sm-12">
                            <h3 id="heading">
                                About This Article  
                            </h3>
                        </div>
                        <div class="col-sm-12 body">
                            Cite This Artilce
                        </div>
                        <div class="col-sm-12 font-italic margin" id = "cite_this_article">
                            A.O. Okewale, C.N. Owabor, J.G. James, 2020. Thermodynamic, Adsorption and 
                            Optimization Studies on Carbon Steel in Hydrochloric Acid Environment using 
                            Okro Leaf Extract as Corrosion Inhibitor. Research Journal of Applied Sciences, 
                            Engineering and Technology 17(2): 40-53. DOI:10.19026/rjaset.17.6038
                        </div>
                        <div class="col-sm-12 margin">
                            <table class="table">
                                <thead class="">
                                    <tr>
                                        <th>Received</th>
                                        <th>Accepted</th>
                                        <th>Published</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>July 15, 2019</td>
                                        <td>September 03, 2019</td>
                                        <td>April 15, 2020</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-12 body">
                            <a href="">Share This Article</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3" id="tableOfContents">
                    <div class="row">
                        <div class="col-sm-12 bg-dark centerText">
                            <h3 style="color: white">Sections</h3>
                        </div>
                    </div>
                    <div class="row" id="sectionItem">
                        <div class="col-sm-12">
                            <a href="#Abstract" id="tbAbstract" onclick="goToSection();">Abstract</a>
                        </div>
                    </div>
                    <div class="row" id="sectionItem">
                        <div class="col-sm-12">
                            <a href="#keywords" id="tbKeywords" onclick="goToSection();">Keywords</a>
                        </div>
                    </div>
                    <div class="row" id="sectionItem">
                        <div class="col-sm-12">
                            <a href="#Introduction" id="tbIntroduction" onclick="goToSection();">Introduction</a>
                        </div>
                    </div>
                    <div class="row" id="sectionItem">
                        <div class="col-sm-12">
                            <a href="#MaterialsAndMethods" id="tbMaterialsAndMethods" onclick="goToSection();">Materials And
                                Methods</a>
                        </div>
                    </div>
                    <div class="row" id="sectionItem">
                        <div class="col-sm-12">
                            <a href="#ResultAndDiscussion" id="tbResultAndDiscussion" onclick="goToSection();">Result And
                                Discussion</a>
                        </div>
                    </div>
                    <div class="row" id="sectionItem">
                        <div class="col-sm-12">
                            <a href="#Conclusion" id="tbConclusion" onclick="goToSection();">Conclusion</a>
                        </div>
                    </div>
                    <div class="row" id="sectionItem">
                        <div class="col-sm-12">
                            <a href="#ConflictsofInterest" id="tbConflictsofInterest" onclick="goToSection();">Conflicts of
                                Interest</a>
                        </div>
                    </div>
                    <div class="row" id="sectionItem">
                        <div class="col-sm-12">
                            <a href="#Affiliation" id="tbAffiliation" onclick="goToSection();">Author Details</a>
                        </div>
                    </div>
                    <div class="row" id="sectionItem">
                        <div class="col-sm-12">
                            <a href="#References" id="tbReferences" onclick="goToSection();">References</a>
                        </div>
                    </div>
                    <div class="row" id="sectionItem">
                        <div class="col-sm-12">
                            <a href="#Rights_and_permissions" id="tbRights_and_permissions" onclick="goToSection();">Rights And Permissions</a>
                        </div>
                    </div>
                    <div class="row" id="sectionItem">
                        <div class="col-sm-12">
                            <a href="#CiteArtilce" id="tbCiteArtilce" onclick="goToSection();">About This Article</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection