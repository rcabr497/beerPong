<div class="main-menu">
    <h6><a href="/"><i class="fa fa-home"></i> Dashboard</a></h6>

    <h6><i class="fa fa-trophy"></i> Matches</h6> 
    <ul class="grey lighten-3">
        <li><a href=""><i class="fa fa-plus"></i> Add New Match</a></li>
        <li><a href=""><i class="fa fa-list"></i> View All Matches</a></li>
    </ul>
    <h6><i class="fa fa-users"></i> Teams</h6>
    <ul class="grey lighten-3">
        <li><a href="{{ url('teams/create') }}"><i class="fa fa-plus"></i> Add New Team</a></li>
        <li><a href="{{ url('teams') }}"><i class="fa fa-list"></i> View All Teams</a></li>
    </ul>
    <h6><i class="fa fa-user"></i> Players</h6>
    <ul class="grey lighten-3">
        <li><a href="{{ url('players/create') }}"><i class="fa fa-plus"></i> Add New Player</a></li>
        <li><a href="{{ url('players') }}"><i class="fa fa-list"></i> View All Players</a></li>
    </ul>
</div>