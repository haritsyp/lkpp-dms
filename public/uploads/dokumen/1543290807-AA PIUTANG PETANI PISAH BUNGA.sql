declare @caccinp nvarchar(7) set @caccinp = '113.401'
declare @caccbrn nvarchar(7) set @caccbrn = '113.402'
declare @dawal datetime set @dawal = convert(datetime,'2012-1-1')
declare @dakhir datetime set @dakhir = convert(datetime,'2012-12-31')

Select QPiutang.ccode, MPetani.cteknisi, MTeknisi.cname as NamaTek,
QPiutang.cfarmer, QPiutang.cname,  
Sum( case caccnt when @caccinp then (case sign(datediff(d, dtran, @dawal )) when 1 then abs(isnull(debet,0))-abs(isnull(kredit,0)) else 0 end) else 0 end) AS SAINP, 
Sum( case caccnt when @caccinp then (case when left(qpiutang.bukti,2)<>'MM' then (case sign(datediff(d, dtran, @dawal )) when 1 then 0 else abs(isnull(Debet,0)) end) else 0 end)END) as MTDINP, 
Sum( case caccnt when @caccinp then(case when qpiutang.dtran>=@dawal then (case when left(qpiutang.bukti,2)='MM' then debet else 0 end) else 0 end)else 0 end) as bungaiNPUT, 
Sum( case caccnt when @caccinp then (case sign(datediff(d, dtran, @dawal )) when 1 then 0 else abs(isnull(Kredit,0)) end) else 0 end) as MTKINP, 
Sum( case caccnt when @caccinp then abs(isnull(Debet,0)) - Abs(isnull(Kredit,0)) else 0 end) AS SKINP, 
Sum( case caccnt when @caccbrn then (case sign(datediff(d, dtran, @dawal )) when 1 then abs(isnull(debet,0))-abs(isnull(kredit,0)) else 0 end) else 0 end) AS SABRN, 
Sum( case caccnt when @caccBRN then (case when left(qpiutang.bukti,2)<>'MM' then (case sign(datediff(d, dtran, @dawal )) when 1 then 0 else abs(isnull(Debet,0)) end) else 0 end)END) as MTDBRN, 
Sum( case caccnt when @caccBRN then(case when qpiutang.dtran>=@dawal then (case when left(qpiutang.bukti,2)='MM' then debet else 0 end) else 0 end)else 0 end) as bungaBARN,
Sum( case caccnt when @caccbrn then (case sign(datediff(d, dtran, @dawal )) when 1 then 0 else abs(isnull(Kredit,0)) end) else 0 end) as MTKBRN, 
Sum( case caccnt when @caccbrn then abs(isnull(Debet,0)) - Abs(isnull(Kredit,0)) else 0 end) AS SKBRN 
From QPiutang, MPetani, MTeknisi
Where QPiutang.ccode = MPetani.ccode 
And QPiutang.cfarmer = MPetani.cfarmer  --and qpiutang.cfarmer='E020050005'

AND MPetani.ccode = MTeknisi.ccode 
AND MPetani.cteknisi = MTeknisi.cteknisi 
AND QPiutang.dtran <= @dakhir 
--AND Qpiutang.cfarmer >= @cfarmer1  and Qpiutang.cfarmer <= @cfarmer2
--ND MPetani.cteknisi >= @cteknisi1 and MPetani.cteknisi <= @cteknisi2 
GROUP BY QPiutang.ccode, MPetani.cteknisi, 
QPiutang.cfarmer, QPiutang.cname, MTeknisi.cname