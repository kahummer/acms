    <?php    

        $housenumber = Input::get('housenumber');   
        $quickfix=House::wherehousenumber($housenumber)->first();
        $housetype = $quickfix->housetype;
        $showrentpayable=Settings::wherehousetype($housetype)->first();
        $payablerent= $showrentpayable->rent;
        $paidby = Input::get('paidby');
        $paid = Input::get('Paid');
        

        $balancediffernce=$payablerent-$paid;



        if ($balancediffernce=0) {
            $balance=0;
        }
        elseif($balancediffernce<=-1)
        {
                $overpay = $balancediffernce;
                

        }
        else
        {
             $balance=$balancediffernce;
        }

        $check=Rent::wherehousenumber($housenumber)->first();
        if ($check)
         {
        $check->housenumber=$housenumber;
        $check->paidby=$paidby;
        $check->Paid=$paid;

        $previersbalance = $check->balance;

        if($previersbalance<=0)
        {
           $check->balance=$balance; 
        }
        else
        {

         // lets check if payments made were above required payments inorder to diduct the amount from the balance 
           if($overpay)
           {
            $newbalance = $balance + $previersbalance;
            $changednewbalance = $newbalance-$overpay;
            $newoutstandingbalance=$changednewbalance;
           }
           else
           {
            $newbalance = $balance + $previersbalance;
            $newoutstandingbalance =$newbalance;
           }

           $check->balance=$newoutstandingbalance;

            if ($newoutstandingbalance<=0) 
            {
               $tellfunction="nobalance";   
            }
            elseif($newoutstandingbalance<0)
            {
               

                 $tellfunction="cradit of".$newoutstandingbalance;
            }
            {
                $tellfunction=$newoutstandingbalance; 
            } 
            $consider = "balance";
        }
        $paid=$check->update();
    
        if ($paid)
         {

            if ($consider="balance") 
            {
             return redirect()->route('rent.index')->with('flash_message', 'Payments for House:'.$housenumber.' has been successfully receved.You had a recarred Balance of.'.$previersbalance.'Your new balance is'.$tellfunction);
            }else
            {
              return redirect()->route('rent.index')->with('flash_message', 'Payments for House:'.$housenumber);
            }

            
         }


         }


        $paymentgate = new Rent;
        $paymentgate->housenumber=$housenumber;
        $paymentgate->paidby=$paidby;
        $paymentgate->Paid=$paid;
        $paymentgate->balance=$balance;
        $paid=$paymentgate->save();

        if ($paid)
         {
            if($balance<=0)
            {
               $tell = "clearedbalance";
            }else
            {
                $tell="Unclearedbalance";
            }

             return redirect()->route('rent.index')->with('flash_message', 'Payments for House: '.$housenumber .' has been successfully receved.Balance is '. $balance .'your balance  status '. $tell);
         }


