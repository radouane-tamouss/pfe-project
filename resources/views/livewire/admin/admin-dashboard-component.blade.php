
<div class="content">   
  <style>
        .content {
          padding-top: 40px;
          padding-bottom: 40px;
        }
        .icon-stat {
            display: block;
            overflow: hidden;
            position: relative;
            padding: 15px;
            margin-bottom: 1em;
            background-color: #fff;
            border-radius: 4px;
            border: 1px solid #ddd;
        }
        .icon-stat-label {
            display: block;
            color: #999;
            font-size: 13px;
        }
        .icon-stat-value {
            display: block;
            font-size: 28px;
            font-weight: 600;
        }
        .icon-stat-visual {
            position: relative;
            top: 22px;
            display: inline-block;
            width: 32px;
            height: 32px;
            border-radius: 4px;
            text-align: center;
            font-size: 16px;
            line-height: 30px;
        }
        .bg-primary {
            color: #fff;
            background: #d74b4b;
        }
        .bg-secondary {
            color: #fff;
            background: #6685a4;
        }
        
        .icon-stat-footer {
            padding: 10px 0 0;
            margin-top: 10px;
            color: #aaa;
            font-size: 12px;
            border-top: 1px solid #eee;
        }
        .column-chart{
          height: 32rem; 
          width : 70%;
          float : left;
        }

        

      
  </style>
  <div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-6">    
          <div class="icon-stat">    
            <div class="row">
              <div class="col-xs-9 text-left">
                <span class="icon-stat-label">Revenus</span>
                <span class="icon-stat-value">{{$totalRevenue}} DH</span>
              </div>   
              <div class="col-xs-2 text-center">
                <i class="fa fa-dollar icon-stat-visual bg-primary"></i>
              </div>
            </div>    
            <div class="icon-stat-footer">
              <i class="fa fa-clock-o"></i> Mis à jour maintenant
            </div>     
          </div>    
        </div>    
        <div class="col-md-3 col-sm-6">    
          <div class="icon-stat">    
            <div class="row">
              <div class="col-xs-8 text-left">
                <span class="icon-stat-label">Ventes totales</span>
                <span class="icon-stat-value">{{$totalSales}}</span>
              </div>    
              <div class="col-xs-2 text-center">
                <i class="fa fa-gift icon-stat-visual bg-secondary"></i>
              </div>
            </div>    
            <div class="icon-stat-footer">
              <i class="fa fa-clock-o"></i> Mis à jour maintenant
            </div>    
          </div>
        </div>
        <div class="col-md-3 col-sm-6">    
          <div class="icon-stat">    
            <div class="row">
              <div class="col-xs-8 text-left">
                <span class="icon-stat-label">Revenu d'aujourd'hui</span>
                <span class="icon-stat-value">{{$todayRevenue}} DH</span>
              </div>    
              <div class="col-xs-2 text-center">
                <i class="fa fa-dollar icon-stat-visual bg-primary"></i>
              </div>
            </div>    
            <div class="icon-stat-footer">
              <i class="fa fa-clock-o"></i> Mis à jour maintenant
            </div>   
          </div>    
        </div>    
        <div class="col-md-3 col-sm-6">    
          <div class="icon-stat">    
            <div class="row">
              <div class="col-xs-8 text-left">
                <span class="icon-stat-label">Ventes d'aujourd'hui</span>
                <span class="icon-stat-value">{{$todaySales}}</span>
              </div>    
              <div class="col-xs-2 text-center">
                <i class="fa fa-gift icon-stat-visual bg-secondary"></i>
              </div>
            </div> 
            <div class="icon-stat-footer">
              <i class="fa fa-clock-o"></i> Mis à jour maintenant
            </div>   
                
          </div>    
          
        </div>  
      </div>
      <!-- <div id="chartContainer" style="height: 370px; width: 100%;"></div> -->             
    </div> 
  </div> 

  <div class="container">
   
          <form action="" method="GET">
            <select name="selectioner" style="width:200px">
                <option value="rev">revenue</option>
                <option value="ven">ventes</option>
              
            </select>
            <input type="submit" name="submit"  value="filtrer" style="border-radius:5px; width : 100px">
        </form>
    
        <div class="row" style="height: 32rem !important">
         
              <?php   if(isset($_GET['submit'])){
                if(!empty($_GET['selectioner']=="rev")) { ?>
               
            

                <div style="float:left; width: 70%; height: 32rem">
                  <livewire:livewire-column-chart
                        key="{{ $columnChartModel->reactiveKey() }}"
                        :column-chart-model="$columnChartModel"
                    />
                </div> 


              <?php } else{ ?>
                 <div class="column-chart" style="float:left; width: 70%; height: 32rem">
                 <livewire:livewire-column-chart
                       key="{{ $vente_ch->reactiveKey() }}"
                       :column-chart-model="$vente_ch"
                   />
               </div> 

             <?php } }?>


            


            
            
              <div class="pie-chart" style="float:right; height: 32rem">
                <livewire:livewire-pie-chart
                    key="{{ $pieChartModel->reactiveKey() }}"
                    :pie-chart-model="$pieChartModel"
                />
              </div>
              <!-- <div id="chartContainer" style="height: 370px; width: 100%;"></div> -->          
        </div> 
      
        <div class="row" style="height: 32rem !important">
       
       <hr>
            <livewire:livewire-line-chart
                key="{{ $lineChartModel->reactiveKey() }}"
                :line-chart-model="$lineChartModel"
            />
            <br>

        </div> 
        <br>
        <hr>

        
     
  </div>
    
</div>

