<section class="sidebar">
  <div class="sidebar__logo">
    <img src="/build/imagenes/log.png" alt="logo institucional">
  </div>

  <ul class="sidebar__menu">
    <?php if (!isset($_SESSION['login'])) { ?>
      <li class="sidebar__menu-li">
        <a href="/">
          <i class='bx bxs-edit'></i>
          Reportar
        </a>
      </li>

      <li class="sidebar__menu-li">
        <a href="/estados">
          <i class='bx bx-table'></i>
          Estados
        </a>
      </li>
    <?php } else { ?>

      <li class="sidebar__menu-li admin">
        <p>
          Bienvenido <br/> <?php echo $_SESSION['nombre'] ?>
        </p>
      </li>

      <li class="sidebar__menu-li">
        <a href="/dashboard">
          <i class='bx bxs-edit'></i>
          Reportes
        </a>
      </li>
    <?php } ?>
  </ul>

  <div class="sidebar__exit">
    <?php if (isset($_SESSION['login'])) { ?>
      <form action="/logout" method="POST">
        <button type="submit" class="botones">
          <i class='bx bx-exit'></i>
          <span class="botones__span">
            Cerrar Sesión
          </span>
        </button>
      </form>

    <?php } else { ?>
      <a href="/login" class="botones">
        <i class='bx bx-user-circle''></i>
        <span class="botones__span">
          Inicar Sesión
        </span>
      </a>
    <?php } ?>
  </div>
</section>