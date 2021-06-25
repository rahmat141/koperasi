<li class="nav-item">
      <!-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse" aria-expanded="true" aria-controls="collapseTwo">
         <i class="ti-wallet"></i>
          <span>Simpanan</span>
        </a>
        <div id="collapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url() ?>index.php/Simpanan/simpanan/" style="text-decoration: none">Form Simpan</a>
            <a class="collapse-item" href="<?= base_url() ?>index.php/Simpanan/laporan_simpananPokok" style="text-decoration: none">Laporan Simpanan Pokok</a>
            <a class="collapse-item" href="<?= base_url() ?>index.php/Simpanan/laporan_simpanan" style="text-decoration: none">Laporan Simpanan Sukarela</a>
            <a class="collapse-item" href="<?= base_url() ?>index.php/Simpanan/laporan_simpananWajib" style="text-decoration: none">Laporan Simpanan Wajib</a>
            <a class="collapse-item" href="<?= base_url() ?>index.php/Simpanan/riwayat_simpanan" style="text-decoration: none">Riwayat Simpanan</a>
            <a class="collapse-item" href="<?= base_url() ?>index.php/Simpanan/riwayat_pengambilan" style="text-decoration: none">Riwayat Pengambilan</a>
          </div>
        </div>
      </li> -->

      <!--  -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapsee">
         <i class="ti-id-badge"></i>
          <span>Master Simpanan</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url() ?>index.php/Simpanan/rekapHSupervisor/" style="text-decoration: none">Lihat Rekap Harian</a>
            <a class="collapse-item" href="<?= base_url() ?>index.php/Simpanan/lihat_anggotaSupervisor/" style="text-decoration: none">Lihat Anggota</a>
          </div>
        </div>
      </li>

      

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapsee">
         <i class="ti-wallet"></i>
          <span>Riwayat Pengambilan</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url() ?>index.php/Simpanan/riwayat_pengambilanSupervisor/" style="text-decoration: none">Lihat Riwayat</a>
            <!-- <a class="collapse-item" href="<?= base_url() ?>index.php/Simpanan/lihat_statusanggota/" style="text-decoration: none">Status Anggota</a> -->
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapsee">
         <i class="ti-id-badge"></i>
          <span>Anggota</span>
        </a>
        <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url() ?>index.php/Simpanan/lihat_anggotaS/" style="text-decoration: none">Lihat Anggota</a>
            <a class="collapse-item" href="<?= base_url() ?>index.php/Simpanan/lihat_statusanggotaS/" style="text-decoration: none">Status Anggota</a>
          </div>
        </div>
      </li>

       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapsee">
         <i class="ti-user"></i>
          <span>Akun</span>
        </a>
        <div id="collapseFive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url() ?>index.php/Login/lihat_akun_supervisor/<?= $this->session->userdata('id_petugas')?>" style="text-decoration: none">Lihat Akun</a>

          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url() ?>index.php/Login/tentangSupervisor/" >
         <i class="ti-info-alt"></i>
          <span>Tentang</span>
        </a>
        
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= site_url('Login/logoutSupervisor') ?>" onclick="return confirm('Anda Yakin Ingin Keluar ?')">
         <i class="ti-power-off"></i>
          <span onclick="">Logout</span>
        </a>
      </li>

