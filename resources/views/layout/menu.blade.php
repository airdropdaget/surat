
        <nav class="bg-white sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <img src="{{url('images/face.jpg')}}" alt="">
            <p class="name">{{auth()->user()->name}}</p>
          </div>
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="{{url('/index')}}">
                <img src="{{url('images/icons/1.png')}}" alt="">
                <span class="menu-title">Beranda</span>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="{{url('/forms')}}">
                <img src="{{url('images/icons/005-forms.png')}}" alt="">
                <span class="menu-title">Tambah Surat</span>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#master-data" aria-expanded="false" aria-controls="sample-pages">
                <img src="{{url('images/icons/5.png')}}" alt="">
                <span class="menu-title">Master Data<i class="fa fa-sort-down"></i></span>
              </a>
              <div class="collapse" id="master-data">
                <ul class="nav flex-column sub-menu">  
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/history')}}">
                      History Penyuntingan
                    </a>
                  </li>
                  
                   <li class="nav-item">
                    <a class="nav-link" href="{{url('/permasalahan')}}">
                      Data Surat
                    </a>
                  </li>                    
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/user')}}">
                      Data User
                    </a>
                  </li>
                
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <img src="{{url('images/icons/6.png')}}" alt="">
                <span class="menu-title">Statistik</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#setting" aria-expanded="false" aria-controls="sample-pages">
                <img src="{{url('images/icons/10.png')}}" alt="">
                <span class="menu-title">Setting<i class="fa fa-sort-down"></i></span>
              </a>
              <div class="collapse" id="setting">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/logout')}}">
                      Logout
                    </a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>