<div id="header">
    <div id="headerlogo">
        <a href="https://www.parlevelsystems.com">
            <img src="img/par_logo.png" alt="Parlevel Systems" target="_blank" rel="noopener noreferrer"
                id="headerimage" width="268px" ; height="fit-content">
        </a>
    </div>
    <div id="searchbar">
        <form action="http://www.google.com/search" name="searchbox" method="get" target="google" id="searchbox">
            <input class="search" name="q" placeholder="Search Google..." />
            <input type="submit" value="Google" class="submit" />
        </form>
    </div>
    <div id="searchbar">
        <input class="search" name="devicequery" id="devicequery" placeholder="Search 3rd Party DMS..." />
        <input type="button" value="DMS" id="devicesubmit" class="submit" onclick='DMS_search();' />
    </div>
    <div id="searchbar">
        <input class="search" name="wampquery" id="wampquery" placeholder="Search Parbox WAMP..." />
        <input type="button" value="WAMP" id="wampsubmit" class="submit" onclick='WAMP_search();' />
    </div>
</div>