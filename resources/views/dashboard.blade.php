@extends('master')



@section('content')
      <div class="row">
        <div class="col l7 s12">
        <h4>Top 5 Teams</h4>
          <table class="highlight">
            <thead>
              <tr>
                  <th data-field="team-name">Team Name</th>
                  <th data-field="win-count">Total Wins</th>
                  <th data-field="win-percent">Win Percentage</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Alvin</td>
                <td>Eclair</td>
                <td></td>
              </tr>
              <tr>
                <td>Alan</td>
                <td>Jellybean</td>
                <td></td>
              </tr>
              <tr>
                <td>Jonathan</td>
                <td>Lollipop</td>
                <td></td>
              </tr>
              <tr>
                <td>Jonathan</td>
                <td>Lollipop</td>
                <td></td>
              </tr>
              <tr>
                <td>Jonathan</td>
                <td>Lollipop</td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col l5 s12">
        <h4>Latest Games</h4>
          <table class="highlight">
            <thead>
              <tr>
                  <th data-field="team-name">Latest Games</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Team 1 vs Team 4</td>
              </tr>
              <tr>
                <td>Team 2 vs Team 3</td>
              </tr>
              <tr>
                <td>Team 5 vs Team 7</td>
              </tr>
              <tr>
                <td>Team 10 vs Team 12</td>
              </tr>
              <tr>
                <td>Team 8 vs Team 9</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

@endsection