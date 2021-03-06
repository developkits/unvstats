<?php include '__header__.tpl.php'; ?>

<section>
  <header>
    <h2>Search result</h2>
  </header>

  <table>

    <colgroup>
      <col class="playername" />
      <col class="playername" />
      <col />
      <col />
      <col />
    </colgroup>

    <thead>
      <tr>
        <th><?php echo custom_sort('Player',     'player'); ?></th>
        <th><?php echo 'Known as'; ?></th>
        <th><?php echo custom_sort('Kills',      'kills'); ?></th>
        <th><?php echo custom_sort('Deaths',     'deaths'); ?></th>
        <th><?php echo custom_sort('Efficiency', 'efficiency'); ?></th>
      </tr>
    </thead>

    <tfoot>
      <tr>
        <td colspan="5">
          Pages: <?php echo $this->pagelister->GetHTML(); ?>
        </td>
      </tr>
    </tfoot>

    <tbody>
      <?php foreach ($this->players AS $player): ?>
        <tr class="list" >
          <td class="playername"><?php echo player_link($player['player_id'], $player['player_name']); ?></td>
          <td class="playername"><?php if(isset($player['player_tjw_name'])) { echo replace_color_codes($player['player_tjw_name']); }?></td>
          <td><?php echo $player['player_kills']; ?></td>
          <td><?php echo $player['player_deaths']; ?></td>
          <td><?php echo $player['player_total_efficiency']; ?></td>
        </tr>
      <?php endforeach; ?>

      <?php if (!count($this->players)): ?>
        <tr>
          <td colspan="5">No matching players found</td>
        </tr>
      <?php endif; ?>
    </tbody>
  </table>
 </section>

 <?php include '__footer__.tpl.php'; ?>
