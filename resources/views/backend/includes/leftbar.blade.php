  <!-- ########## START: LEFT PANEL ########## -->
  <div class="br-logo"><a href=""><span>[</span>bracket <i>plus</i><span>]</span></a></div>
  <div class="br-sideleft sideleft-scrollbar">
    <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
    <ul class="br-sideleft-menu">
      <li class="br-menu-item">
        <a href="index.html" class="br-menu-link active">
          <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
          <span class="menu-item-label">Dashboard</span>
        </a><!-- br-menu-link -->
      </li><!-- br-menu-item -->
      <li class="br-menu-item">
        <a href="mailbox.html" class="br-menu-link">
          <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
          <span class="menu-item-label">Admin Dashboard</span>
        </a><!-- br-menu-link -->
      </li><!-- br-menu-item -->
      <li class="br-menu-item">
        <a href="#" class="br-menu-link with-sub">
          <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
          <span class="menu-item-label">Category</span>
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub">
          <li class="sub-item"><a href="{{ Route('category.add')}}" class="sub-link">Add Category</a></li>
          <li class="sub-item"><a href="{{Route('category.manage')}}" class="sub-link">Manage Category</a></li>
         
        </ul>
      </li>
      <li class="br-menu-item">
        <a href="#" class="br-menu-link with-sub">
          <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
          <span class="menu-item-label">Sub-Category</span>
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub">
          <li class="sub-item"><a href="{{ Route('subcategory.add')}}" class="sub-link">Add Sub-Category</a></li>
          <li class="sub-item"><a href="{{Route('subcategory.manage')}}" class="sub-link">Manage Sub-Category</a></li>
         
        </ul>
      </li>
      <li class="br-menu-item">
        <a href="#" class="br-menu-link with-sub">
          <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
          <span class="menu-item-label">Product</span>
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub">
          <li class="sub-item"><a href="{{ Route('product.add')}}" class="sub-link">Add Product</a></li>
          <li class="sub-item"><a href="{{Route('product.manage')}}" class="sub-link">Manage Product</a></li>
         
        </ul>
      </li>
      <li class="br-menu-item">
        <a href="#" class="br-menu-link with-sub">
          <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
          <span class="menu-item-label">Cupon</span>
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub">
          <li class="sub-item"><a href="{{ Route('cupon')}}" class="sub-link">Add Cupon</a></li>
          <li class="sub-item"><a href="" class="sub-link">Manage Cupon</a></li>
         
        </ul>
      </li>
      
      

    <br>
  </div><!-- br-sideleft -->
  <!-- ########## END: LEFT PANEL ########## -->