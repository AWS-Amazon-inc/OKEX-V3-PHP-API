<?php
/**
 * Created by PhpStorm.
 * User: hengliu
 * Date: 2019/7/8
 * Time: 3:06 PM
 */

// 第1组数据

$partial = "3366.1:7:3366.8:9:3366:6:3368:8";
$partial = '{"table":"futures/depth","action":"partial","data":[{"instrument_id":"BSV-USD-190816","asks":[["123.96","110","0","2"],["123.97","40","0","2"],["124.03","96","0","1"],["124.12","2","0","1"],["124.14","1645","0","2"],["124.19","250","0","1"],["124.21","10","0","1"],["124.22","10","0","1"],["124.25","10","0","1"],["124.31","66","0","1"],["124.39","360","0","1"],["124.4","233","0","1"],["124.45","360","0","1"],["124.5","757","0","1"],["124.59","865","0","1"],["124.75","960","0","2"],["124.8","2000","0","1"],["125.06","1522","0","1"],["125.09","1080","0","1"],["125.16","1230","0","1"],["125.3","121","0","1"],["125.33","30","0","1"],["125.44","144","0","1"],["125.7","5839","0","2"],["126.21","3528","0","1"],["127.15","2469","0","1"],["128.08","1189","0","1"],["131.0","515","0","1"],["138.3","64","0","1"],["138.31","128","0","2"],["138.33","128","0","2"],["141.37","128","0","2"],["142.37","64","0","1"],["142.9","64","0","1"],["144.43","106","0","1"],["144.46","20","0","1"],["144.86","185","0","1"],["145.29","187","0","1"],["145.72","239","0","1"],["146.15","101","0","1"],["146.58","228","0","1"],["147.01","299","0","1"],["147.45","297","0","1"],["147.89","283","0","1"],["148.33","223","0","1"],["148.77","278","0","1"],["149.21","129","0","1"],["149.65","269","0","1"],["150.09","128","0","1"],["150.16","20","0","1"],["150.54","124","0","1"],["150.99","134","0","1"],["151.44","213","0","1"],["151.89","195","0","1"],["152.34","116","0","1"],["152.79","224","0","1"],["153.24","290","0","1"],["153.69","202","0","1"],["154.15","243","0","1"],["154.61","286","0","1"],["155.07","126","0","1"],["155.53","185","0","1"],["155.99","167","0","1"],["156.45","204","0","1"],["156.46","64","0","1"],["156.91","191","0","1"],["157.38","244","0","1"],["157.85","249","0","1"],["158.32","234","0","1"],["158.79","236","0","1"],["159.26","163","0","1"],["159.73","273","0","1"],["160.0","1","0","1"],["160.2","106","0","1"],["160.21","264","0","1"],["160.69","187","0","1"],["161.17","125","0","1"],["161.66","253","0","1"],["165.0","1","0","1"],["169.0","1","0","1"]],"bids":[["123.66","44","0","1"],["123.62","6","0","1"],["123.53","364","0","1"],["123.49","2","0","1"],["123.44","24","0","1"],["123.43","120","0","1"],["123.42","24","0","1"],["123.39","231","0","1"],["123.37","96","0","1"],["123.35","96","0","1"],["123.23","16","0","1"],["123.21","240","0","1"],["123.19","2046","0","4"],["123.16","240","0","1"],["123.14","90","0","1"],["123.04","1230","0","2"],["122.97","360","0","1"],["122.96","196","0","1"],["122.9","360","0","1"],["122.89","2000","0","1"],["122.8","1385","0","1"],["122.6","480","0","1"],["122.59","480","0","1"],["122.58","5839","0","1"],["122.34","30","0","1"],["122.06","3529","0","1"],["121.76","2470","0","1"],["121.64","64","0","1"],["121.11","64","0","1"],["120.83","1190","0","1"],["120.55","159","0","1"],["118.36","142","0","1"],["114.0","10","0","1"],["104.76","202","0","1"],["104.45","213","0","1"],["104.14","160","0","1"],["103.82","138","0","1"],["103.5","282","0","1"],["103.18","159","0","1"],["102.87","106","0","1"],["102.56","189","0","1"],["102.25","161","0","1"],["101.94","197","0","1"],["101.63","117","0","1"],["101.32","145","0","1"],["101.01","288","0","1"],["100.7","149","0","1"],["100.39","193","0","1"],["100.08","271","0","1"],["99.77","273","0","1"],["99.47","233","0","1"],["99.17","147","0","1"],["98.87","122","0","1"],["98.57","149","0","1"],["98.27","205","0","1"],["97.97","102","0","1"],["97.67","269","0","1"],["97.37","237","0","1"],["97.07","235","0","1"],["96.77","194","0","1"],["96.47","265","0","1"],["96.18","102","0","1"],["95.89","105","0","1"],["95.6","166","0","1"],["95.31","195","0","1"],["95.02","295","0","1"],["94.73","135","0","1"],["94.44","291","0","1"],["94.15","276","0","1"],["93.86","237","0","1"],["93.57","104","0","1"],["93.28","258","0","1"],["93.0","235","0","1"]],"timestamp":"2019-08-15T06:45:25.158Z","checksum":447726740}]}';
$update = '{"table":"futures/depth","action":"update","data":[{"instrument_id":"BSV-USD-190816","asks":[["123.96","0","0","0"],["124.0","24","0","1"],["124.06","96","0","1"],["124.13","3","0","1"],["124.23","240","0","1"],["124.39","0","0","0"]],"bids":[["123.16","0","0","0"]],"timestamp":"2019-08-15T06:45:25.258Z","checksum":174965541}]}';

//$partial = '{"table":"futures/depth","action":"partial","data":[{"instrument_id":"BSV-USD-190816","asks":[["123.97","40","0","2"],["124.03","96","0","1"],["124.06","96","0","1"],["124.12","2","0","1"],["124.13","3","0","1"],["124.14","1645","0","2"],["124.19","250","0","1"],["124.21","10","0","1"],["124.22","10","0","1"],["124.23","240","0","1"],["124.25","10","0","1"],["124.31","66","0","1"],["124.4","233","0","1"],["124.45","360","0","1"],["124.5","757","0","1"],["124.59","865","0","1"],["124.75","960","0","2"],["124.8","2000","0","1"],["125.06","1522","0","1"],["125.09","1080","0","1"],["125.16","1230","0","1"],["125.3","121","0","1"],["125.33","30","0","1"],["125.44","144","0","1"],["125.7","5839","0","2"],["126.21","3528","0","1"],["127.15","2469","0","1"],["128.08","1189","0","1"],["131.0","515","0","1"],["138.3","64","0","1"],["138.31","128","0","2"],["138.33","128","0","2"],["141.37","128","0","2"],["142.37","64","0","1"],["142.9","64","0","1"],["144.43","106","0","1"],["144.46","20","0","1"],["144.86","185","0","1"],["145.29","187","0","1"],["145.72","239","0","1"],["146.15","101","0","1"],["146.58","228","0","1"],["147.01","299","0","1"],["147.45","297","0","1"],["147.89","283","0","1"],["148.33","223","0","1"],["148.77","278","0","1"],["149.21","129","0","1"],["149.65","269","0","1"],["150.09","128","0","1"],["150.16","20","0","1"],["150.54","124","0","1"],["150.99","134","0","1"],["151.44","213","0","1"],["151.89","195","0","1"],["152.34","116","0","1"],["152.79","224","0","1"],["153.24","290","0","1"],["153.69","202","0","1"],["154.15","243","0","1"],["154.61","286","0","1"],["155.07","126","0","1"],["155.53","185","0","1"],["155.99","167","0","1"],["156.45","204","0","1"],["156.46","64","0","1"],["156.91","191","0","1"],["157.38","244","0","1"],["157.85","249","0","1"],["158.32","234","0","1"],["158.79","236","0","1"],["159.26","163","0","1"],["159.73","273","0","1"],["160.0","1","0","1"],["160.2","106","0","1"],["160.21","264","0","1"],["160.69","187","0","1"],["161.17","125","0","1"],["161.66","253","0","1"],["165.0","1","0","1"],["169.0","1","0","1"]],"bids":[["123.66","44","0","1"],["123.62","6","0","1"],["123.53","364","0","1"],["123.49","2","0","1"],["123.44","24","0","1"],["123.43","120","0","1"],["123.42","24","0","1"],["123.39","231","0","1"],["123.37","96","0","1"],["123.35","96","0","1"],["123.23","16","0","1"],["123.21","240","0","1"],["123.19","2046","0","4"],["123.14","90","0","1"],["123.04","1230","0","2"],["122.97","360","0","1"],["122.96","196","0","1"],["122.9","360","0","1"],["122.89","2000","0","1"],["122.8","1385","0","1"],["122.6","480","0","1"],["122.59","480","0","1"],["122.58","5839","0","1"],["122.34","30","0","1"],["122.06","3529","0","1"],["121.76","2470","0","1"],["121.64","64","0","1"],["121.11","64","0","1"],["120.83","1190","0","1"],["120.55","159","0","1"],["118.36","142","0","1"],["114.0","10","0","1"],["104.76","202","0","1"],["104.45","213","0","1"],["104.14","160","0","1"],["103.82","138","0","1"],["103.5","282","0","1"],["103.18","159","0","1"],["102.87","106","0","1"],["102.56","189","0","1"],["102.25","161","0","1"],["101.94","197","0","1"],["101.63","117","0","1"],["101.32","145","0","1"],["101.01","288","0","1"],["100.7","149","0","1"],["100.39","193","0","1"],["100.08","271","0","1"],["99.77","273","0","1"],["99.47","233","0","1"],["99.17","147","0","1"],["98.87","122","0","1"],["98.57","149","0","1"],["98.27","205","0","1"],["97.97","102","0","1"],["97.67","269","0","1"],["97.37","237","0","1"],["97.07","235","0","1"],["96.77","194","0","1"],["96.47","265","0","1"],["96.18","102","0","1"],["95.89","105","0","1"],["95.6","166","0","1"],["95.31","195","0","1"],["95.02","295","0","1"],["94.73","135","0","1"],["94.44","291","0","1"],["94.15","276","0","1"],["93.86","237","0","1"],["93.57","104","0","1"],["93.28","258","0","1"],["93.0","235","0","1"]],"timestamp":"2019-08-15T06:45:25.258Z","checksum":174965541}]}';

// 第2组数据
//$partial = '{"table":"futures/depth","action":"partial","data":[{"instrument_id":"EOS-USD-190927","asks":[["4.236","116","0","14"],["4.237","530","0","5"],["4.238","4968","0","7"],["4.239","797","0","3"],["4.24","578","0","10"],["4.241","704","0","8"],["4.242","9209","0","11"],["4.243","1655","0","7"],["4.244","663","0","7"],["4.245","667","0","5"],["4.246","1547","0","14"],["4.247","2785","0","6"],["4.248","2002","0","15"],["4.249","1975","0","15"],["4.25","3469","0","28"],["4.251","928","0","9"],["4.252","316","0","6"],["4.253","3042","0","16"],["4.254","793","0","8"],["4.255","3592","0","12"],["4.256","4737","0","10"],["4.257","470","0","5"],["4.258","1411","0","13"],["4.259","7380","0","11"],["4.26","144421","0","16"],["4.261","108","0","5"],["4.262","168","0","3"],["4.263","1090","0","5"],["4.264","3169","0","7"],["4.265","278","0","4"],["4.266","479","0","6"],["4.267","1097","0","9"],["4.268","295","0","4"],["4.269","56","0","4"],["4.27","392","0","8"],["4.272","21","0","3"],["4.273","1","0","1"],["4.274","3","0","3"],["4.275","172","0","5"],["4.276","3053","0","5"],["4.277","683","0","1"],["4.278","452","0","5"],["4.279","24","0","3"],["4.28","371","0","7"],["4.281","1","0","1"],["4.282","129","0","2"],["4.283","1","0","1"],["4.284","6155","0","2"],["4.285","216","0","3"],["4.286","7519","0","7"],["4.288","687","0","7"],["4.289","26","0","6"],["4.29","189","0","7"],["4.291","3627","0","2"],["4.292","2","0","2"],["4.293","1786","0","1"],["4.294","87","0","3"],["4.295","42","0","1"],["4.296","2835","0","2"],["4.297","1310","0","9"],["4.298","304","0","5"],["4.299","580","0","4"],["4.3","1558","0","23"],["4.301","13","0","1"],["4.302","26","0","2"],["4.303","250","0","1"],["4.304","993","0","6"],["4.305","140","0","3"],["4.306","46","0","4"],["4.307","5001","0","2"],["4.308","219","0","3"],["4.31","720","0","11"],["4.311","4","0","1"],["4.312","1","0","1"],["4.313","1","0","1"],["4.314","863","0","2"],["4.316","44","0","3"],["4.318","125","0","5"],["4.319","379","0","4"],["4.32","1441","0","12"],["4.321","25","0","1"],["4.322","399","0","2"],["4.323","244","0","2"],["4.324","1","0","1"],["4.325","10","0","1"],["4.326","50","0","3"],["4.327","3250","0","1"],["4.328","104","0","3"],["4.329","20","0","1"],["4.33","320","0","10"],["4.332","1","0","1"],["4.333","43","0","4"],["4.334","7","0","2"],["4.335","2","0","1"],["4.336","1042","0","3"],["4.337","637","0","2"],["4.338","600","0","3"],["4.34","327","0","13"],["4.341","43","0","1"],["4.342","22","0","2"],["4.343","938","0","1"],["4.344","1","0","1"],["4.346","435","0","2"],["4.348","499","0","4"],["4.349","72","0","2"],["4.35","4346","0","44"],["4.351","100","0","1"],["4.352","589","0","3"],["4.353","318","0","4"],["4.354","1","0","1"],["4.355","662","0","7"],["4.356","6702","0","5"],["4.358","20","0","4"],["4.359","5","0","1"],["4.36","37","0","9"],["4.362","16","0","3"],["4.364","96","0","3"],["4.365","140","0","4"],["4.366","284","0","3"],["4.367","1","0","1"],["4.368","489","0","7"],["4.369","1153","0","16"],["4.37","2687","0","11"],["4.371","2","0","1"],["4.372","1","0","1"],["4.374","427","0","5"],["4.375","207","0","3"],["4.376","1","0","1"],["4.377","50","0","1"],["4.378","48","0","3"],["4.38","696","0","12"],["4.381","4","0","1"],["4.382","456","0","3"],["4.384","222","0","3"],["4.385","22","0","2"],["4.386","1316","0","2"],["4.387","56","0","2"],["4.388","217","0","4"],["4.389","56","0","3"],["4.39","1873","0","8"],["4.391","439","0","1"],["4.392","1","0","1"],["4.394","1","0","1"],["4.395","1019","0","2"],["4.396","1","0","1"],["4.398","78","0","6"],["4.399","1374","0","11"],["4.4","4945","0","41"],["4.401","13","0","1"],["4.402","89","0","2"],["4.403","115","0","2"],["4.404","226","0","2"],["4.406","1","0","1"],["4.408","133","0","2"],["4.409","44","0","1"],["4.41","1547","0","63"],["4.411","5","0","1"],["4.412","398","0","2"],["4.413","318","0","5"],["4.414","1","0","1"],["4.415","547","0","5"],["4.416","676","0","3"],["4.417","70","0","1"],["4.418","45","0","2"],["4.419","132","0","1"],["4.42","2159","0","8"],["4.422","492","0","3"],["4.423","88","0","1"],["4.424","1","0","1"],["4.425","154","0","1"],["4.426","242","0","3"],["4.428","9","0","3"],["4.429","138","0","2"],["4.43","5249","0","12"],["4.432","32","0","3"],["4.433","44","0","1"],["4.434","6391","0","4"],["4.436","1","0","1"],["4.438","669","0","3"],["4.44","9","0","4"],["4.441","15","0","1"],["4.442","1525","0","10"],["4.444","56","0","5"],["4.446","1","0","1"],["4.448","445","0","2"],["4.449","6542","0","3"],["4.45","10535","0","23"],["4.451","143","0","2"],["4.452","301","0","2"],["4.453","13","0","1"],["4.454","1","0","1"],["4.455","44","0","1"],["4.456","236","0","4"],["4.457","8031","0","3"],["4.458","1","0","1"],["4.459","200","0","1"],["4.46","90","0","8"],["4.462","827","0","3"],["4.464","21","0","2"],["4.465","365","0","4"]],"bids":[["4.235","2533","0","9"],["4.234","659","0","5"],["4.233","2002","0","6"],["4.232","1354","0","22"],["4.231","1165","0","20"],["4.23","416","0","70"],["4.229","1614","0","37"],["4.228","1219","0","34"],["4.227","633","0","31"],["4.226","2109","0","36"],["4.225","623","0","75"],["4.224","1262","0","35"],["4.223","2499","0","33"],["4.222","726","0","28"],["4.221","3395","0","31"],["4.22","3898","0","24"],["4.219","1133","0","24"],["4.218","727","0","14"],["4.217","681","0","8"],["4.216","451","0","6"],["4.215","920","0","8"],["4.214","2385","0","1"],["4.213","330","0","4"],["4.212","1","0","1"],["4.211","63","0","2"],["4.21","926","0","3"],["4.209","153","0","2"],["4.208","349","0","2"],["4.207","631","0","1"],["4.206","3099","0","2"],["4.204","201","0","2"],["4.203","200","0","2"],["4.202","3","0","3"],["4.201","50","0","1"],["4.2","56116","0","7"],["4.198","1","0","1"],["4.196","42","0","2"],["4.195","160","0","1"],["4.194","1","0","1"],["4.192","1","0","1"],["4.19","681","0","4"],["4.188","2","0","2"],["4.187","10","0","1"],["4.186","43","0","3"],["4.185","20","0","1"],["4.184","4369","0","2"],["4.183","335","0","3"],["4.182","1","0","1"],["4.181","311","0","3"],["4.18","844","0","9"],["4.179","175","0","2"],["4.178","3","0","2"],["4.177","2760","0","1"],["4.176","43","0","3"],["4.175","813","0","5"],["4.174","252","0","3"],["4.173","2207","0","4"],["4.172","6196","0","3"],["4.171","15589","0","7"],["4.17","1308","0","9"],["4.169","14","0","3"],["4.168","126","0","3"],["4.167","384","0","3"],["4.166","92","0","3"],["4.165","514","0","9"],["4.164","3","0","3"],["4.163","1","0","1"],["4.162","5","0","4"],["4.161","121","0","3"],["4.16","861","0","15"],["4.158","54","0","5"],["4.157","159","0","3"],["4.156","542","0","3"],["4.155","176","0","6"],["4.154","202","0","3"],["4.152","1144","0","8"],["4.151","1372","0","14"],["4.15","2810","0","27"],["4.148","1","0","1"],["4.146","43","0","3"],["4.144","2","0","2"],["4.143","1","0","1"],["4.142","3","0","2"],["4.141","1154","0","4"],["4.14","666","0","9"],["4.139","917","0","1"],["4.138","201","0","2"],["4.136","50","0","3"],["4.134","4","0","2"],["4.133","1849","0","4"],["4.132","120","0","3"],["4.131","196","0","2"],["4.13","1733","0","11"],["4.129","406","0","2"],["4.128","165","0","4"],["4.127","2","0","1"],["4.126","1203","0","3"],["4.125","628","0","5"],["4.124","6","0","3"],["4.123","28","0","2"],["4.122","209","0","3"],["4.121","5","0","1"],["4.12","1932","0","10"],["4.119","267","0","2"],["4.118","7","0","2"],["4.117","300","0","1"],["4.116","280","0","7"],["4.115","125","0","1"],["4.114","2853","0","5"],["4.112","212","0","2"],["4.111","50","0","3"],["4.11","154","0","7"],["4.109","2063","0","4"],["4.108","82","0","4"],["4.107","7240","0","14"],["4.106","301","0","2"],["4.105","9","0","2"],["4.104","323","0","4"],["4.103","191","0","1"],["4.102","1","0","1"],["4.101","702","0","2"],["4.1","4689","0","39"],["4.098","20001","0","2"],["4.097","1800","0","2"],["4.096","241","0","3"],["4.094","1414","0","5"],["4.093","41","0","2"],["4.092","3","0","2"],["4.091","10","0","1"],["4.09","4065","0","17"],["4.088","1409","0","3"],["4.086","512","0","3"],["4.085","109","0","2"],["4.084","1","0","1"],["4.082","13","0","2"],["4.081","422","0","2"],["4.08","723","0","12"],["4.079","20","0","1"],["4.078","1878","0","23"],["4.077","1092","0","3"],["4.076","271","0","2"],["4.075","2852","0","2"],["4.074","1","0","1"],["4.073","407","0","1"],["4.072","1","0","1"],["4.071","81","0","1"],["4.07","120","0","6"],["4.068","90","0","2"],["4.066","1","0","1"],["4.065","243","0","2"],["4.064","309","0","3"],["4.062","1","0","1"],["4.061","458","0","2"],["4.06","1669","0","8"],["4.058","721","0","4"],["4.056","252","0","3"],["4.055","771","0","5"],["4.054","1","0","1"],["4.052","292","0","4"],["4.05","1698","0","19"],["4.049","424","0","3"],["4.048","1","0","1"],["4.046","1","0","1"],["4.045","110","0","1"],["4.044","1","0","1"],["4.043","32","0","2"],["4.042","1","0","1"],["4.041","20","0","1"],["4.04","4116","0","5"],["4.038","501","0","2"],["4.037","121","0","1"],["4.036","41","0","2"],["4.034","243","0","3"],["4.033","443","0","1"],["4.032","1","0","1"],["4.03","91","0","8"],["4.028","216","0","2"],["4.026","1","0","1"],["4.025","104","0","3"],["4.024","258","0","2"],["4.022","81","0","2"],["4.021","540","0","2"],["4.02","2579","0","19"],["4.018","1","0","1"],["4.017","622","0","3"],["4.016","41","0","2"],["4.014","301","0","3"],["4.013","50","0","1"],["4.012","1","0","1"],["4.011","1212","0","3"],["4.01","73","0","10"],["4.008","9","0","2"],["4.007","40","0","2"],["4.006","41","0","2"],["4.005","4786","0","12"],["4.004","1","0","1"],["4.003","300","0","1"],["4.002","1","0","1"],["4.001","62","0","2"],["4","3985","0","55"]],"timestamp":"2019-07-20T15:03:39.426Z","checksum":1530207004}]}';
//$update = '{"table":"futures/depth","action":"update","data":[{"instrument_id":"EOS-USD-190927","asks":[["4.236","122","0","15"],["4.238","4843","0","6"],["4.239","684","0","5"],["4.24","703","0","11"],["4.241","829","0","9"],["4.242","9019","0","9"],["4.244","708","0","8"],["4.245","767","0","6"],["4.246","1647","0","15"],["4.248","1802","0","14"],["4.25","3869","0","29"],["4.251","1732","0","12"],["4.264","3079","0","6"]],"bids":[["4.226","2234","0","37"],["4.225","510","0","74"],["4.222","826","0","29"],["4.221","3495","0","32"],["4.218","827","0","15"],["4.216","551","0","7"]],"timestamp":"2019-07-20T15:03:39.551Z","checksum":-1505000986}]}';

$checksum = new ChecksumTest();

$partial = $checksum->depthMerge($partial,$update);
// java
//$partial = '{"table":"futures/depth","action":"partial","data":[{"instrument_id":"BSV-USD-190816","asks":[["123.97","40","0"],["124.0","24","0"],["124.03","96","0"],["124.06","96","0"],["124.12","2","0"],["124.13","3","0"],["124.14","1645","0"],["124.19","250","0"],["124.21","10","0"],["124.22","10","0"],["124.23","240","0"],["124.25","10","0"],["124.31","66","0"],["124.4","233","0"],["124.45","360","0"],["124.5","757","0"],["124.59","865","0"],["124.75","960","0"],["124.8","2000","0"],["125.06","1522","0"],["125.09","1080","0"],["125.16","1230","0"],["125.3","121","0"],["125.33","30","0"],["125.44","144","0"],["125.7","5839","0"],["126.21","3528","0"],["127.15","2469","0"],["128.08","1189","0"],["131.0","515","0"],["138.3","64","0"],["138.31","128","0"],["138.33","128","0"],["141.37","128","0"],["142.37","64","0"],["142.9","64","0"],["144.43","106","0"],["144.46","20","0"],["144.86","185","0"],["145.29","187","0"],["145.72","239","0"],["146.15","101","0"],["146.58","228","0"],["147.01","299","0"],["147.45","297","0"],["147.89","283","0"],["148.33","223","0"],["148.77","278","0"],["149.21","129","0"],["149.65","269","0"],["150.09","128","0"],["150.16","20","0"],["150.54","124","0"],["150.99","134","0"],["151.44","213","0"],["151.89","195","0"],["152.34","116","0"],["152.79","224","0"],["153.24","290","0"],["153.69","202","0"],["154.15","243","0"],["154.61","286","0"],["155.07","126","0"],["155.53","185","0"],["155.99","167","0"],["156.45","204","0"],["156.46","64","0"],["156.91","191","0"],["157.38","244","0"],["157.85","249","0"],["158.32","234","0"],["158.79","236","0"],["159.26","163","0"],["159.73","273","0"],["160.0","1","0"],["160.2","106","0"],["160.21","264","0"],["160.69","187","0"],["161.17","125","0"],["161.66","253","0"],["165.0","1","0"],["169.0","1","0"]],"bids":[["123.66","44","0"],["123.62","6","0"],["123.53","364","0"],["123.49","2","0"],["123.44","24","0"],["123.43","120","0"],["123.42","24","0"],["123.39","231","0"],["123.37","96","0"],["123.35","96","0"],["123.23","16","0"],["123.21","240","0"],["123.19","2046","0"],["123.14","90","0"],["123.04","1230","0"],["122.97","360","0"],["122.96","196","0"],["122.9","360","0"],["122.89","2000","0"],["122.8","1385","0"],["122.6","480","0"],["122.59","480","0"],["122.58","5839","0"],["122.34","30","0"],["122.06","3529","0"],["121.76","2470","0"],["121.64","64","0"],["121.11","64","0"],["120.83","1190","0"],["120.55","159","0"],["118.36","142","0"],["114.0","10","0"],["104.76","202","0"],["104.45","213","0"],["104.14","160","0"],["103.82","138","0"],["103.5","282","0"],["103.18","159","0"],["102.87","106","0"],["102.56","189","0"],["102.25","161","0"],["101.94","197","0"],["101.63","117","0"],["101.32","145","0"],["101.01","288","0"],["100.7","149","0"],["100.39","193","0"],["100.08","271","0"],["99.77","273","0"],["99.47","233","0"],["99.17","147","0"],["98.87","122","0"],["98.57","149","0"],["98.27","205","0"],["97.97","102","0"],["97.67","269","0"],["97.37","237","0"],["97.07","235","0"],["96.77","194","0"],["96.47","265","0"],["96.18","102","0"],["95.89","105","0"],["95.6","166","0"],["95.31","195","0"],["95.02","295","0"],["94.73","135","0"],["94.44","291","0"],["94.15","276","0"],["93.86","237","0"],["93.57","104","0"],["93.28","258","0"],["93.0","235","0"]],"timestamp":"2019-08-15T06:45:25.258Z","checksum":174965541}]}';
// php
//$partial = '{"table":"futures/depth","action":"partial","data":[{"instrument_id":"BSV-USD-190816","asks":[["123.97","40","0","2"],["124.03","96","0","1"],["124.06","96","0","1"],["124.12","2","0","1"],["124.13","3","0","1"],["124.14","1645","0","2"],["124.19","250","0","1"],["124.21","10","0","1"],["124.22","10","0","1"],["124.23","240","0","1"],["124.25","10","0","1"],["124.31","66","0","1"],["124.4","233","0","1"],["124.45","360","0","1"],["124.5","757","0","1"],["124.59","865","0","1"],["124.75","960","0","2"],["124.8","2000","0","1"],["125.06","1522","0","1"],["125.09","1080","0","1"],["125.16","1230","0","1"],["125.3","121","0","1"],["125.33","30","0","1"],["125.44","144","0","1"],["125.7","5839","0","2"],["126.21","3528","0","1"],["127.15","2469","0","1"],["128.08","1189","0","1"],["131.0","515","0","1"],["138.3","64","0","1"],["138.31","128","0","2"],["138.33","128","0","2"],["141.37","128","0","2"],["142.37","64","0","1"],["142.9","64","0","1"],["144.43","106","0","1"],["144.46","20","0","1"],["144.86","185","0","1"],["145.29","187","0","1"],["145.72","239","0","1"],["146.15","101","0","1"],["146.58","228","0","1"],["147.01","299","0","1"],["147.45","297","0","1"],["147.89","283","0","1"],["148.33","223","0","1"],["148.77","278","0","1"],["149.21","129","0","1"],["149.65","269","0","1"],["150.09","128","0","1"],["150.16","20","0","1"],["150.54","124","0","1"],["150.99","134","0","1"],["151.44","213","0","1"],["151.89","195","0","1"],["152.34","116","0","1"],["152.79","224","0","1"],["153.24","290","0","1"],["153.69","202","0","1"],["154.15","243","0","1"],["154.61","286","0","1"],["155.07","126","0","1"],["155.53","185","0","1"],["155.99","167","0","1"],["156.45","204","0","1"],["156.46","64","0","1"],["156.91","191","0","1"],["157.38","244","0","1"],["157.85","249","0","1"],["158.32","234","0","1"],["158.79","236","0","1"],["159.26","163","0","1"],["159.73","273","0","1"],["160.0","1","0","1"],["160.2","106","0","1"],["160.21","264","0","1"],["160.69","187","0","1"],["161.17","125","0","1"],["161.66","253","0","1"],["165.0","1","0","1"],["169.0","1","0","1"]],"bids":[["123.66","44","0","1"],["123.62","6","0","1"],["123.53","364","0","1"],["123.49","2","0","1"],["123.44","24","0","1"],["123.43","120","0","1"],["123.42","24","0","1"],["123.39","231","0","1"],["123.37","96","0","1"],["123.35","96","0","1"],["123.23","16","0","1"],["123.21","240","0","1"],["123.19","2046","0","4"],["123.14","90","0","1"],["123.04","1230","0","2"],["122.97","360","0","1"],["122.96","196","0","1"],["122.9","360","0","1"],["122.89","2000","0","1"],["122.8","1385","0","1"],["122.6","480","0","1"],["122.59","480","0","1"],["122.58","5839","0","1"],["122.34","30","0","1"],["122.06","3529","0","1"],["121.76","2470","0","1"],["121.64","64","0","1"],["121.11","64","0","1"],["120.83","1190","0","1"],["120.55","159","0","1"],["118.36","142","0","1"],["114.0","10","0","1"],["104.76","202","0","1"],["104.45","213","0","1"],["104.14","160","0","1"],["103.82","138","0","1"],["103.5","282","0","1"],["103.18","159","0","1"],["102.87","106","0","1"],["102.56","189","0","1"],["102.25","161","0","1"],["101.94","197","0","1"],["101.63","117","0","1"],["101.32","145","0","1"],["101.01","288","0","1"],["100.7","149","0","1"],["100.39","193","0","1"],["100.08","271","0","1"],["99.77","273","0","1"],["99.47","233","0","1"],["99.17","147","0","1"],["98.87","122","0","1"],["98.57","149","0","1"],["98.27","205","0","1"],["97.97","102","0","1"],["97.67","269","0","1"],["97.37","237","0","1"],["97.07","235","0","1"],["96.77","194","0","1"],["96.47","265","0","1"],["96.18","102","0","1"],["95.89","105","0","1"],["95.6","166","0","1"],["95.31","195","0","1"],["95.02","295","0","1"],["94.73","135","0","1"],["94.44","291","0","1"],["94.15","276","0","1"],["93.86","237","0","1"],["93.57","104","0","1"],["93.28","258","0","1"],["93.0","235","0","1"]],"timestamp":"2019-08-15T06:45:25.258Z","checksum":174965541}]}';
print_r($partial."\n");
$state = $checksum->checkSum($partial);

//print_r($state);
//$state = $checksum->getCrc32($partial);

if ($state){
    echo "校验成功\n";
//    print_r($partial);
}else{
    echo "校验失败\n";
}

class ChecksumTest{
    /**
     * 校验和
     * @param $partial
     * @return bool
     */
    function checksum($partial){

        $partial = json_decode($partial, true);

        $asks = array_values($partial["data"][0]["asks"]);

        $bids = array_values($partial["data"][0]["bids"]);

        $strs="";
        for ($i=0; $i<25; $i++){
            if (@$bids[$i]){
                $strs.=$bids[$i][0];
                $strs.=":";
                $strs.=$bids[$i][1];
                $strs.=":";
            }

            if (@$asks[$i]){
                $strs.=$asks[$i][0];
                $strs.=":";
                $strs.=$asks[$i][1];
                $strs.=":";
            }
        }

        $strs = substr($strs,0,strlen($strs)-1);

        print_r($strs . "\n");

        $strs = crc32($strs);

        // 计算前25档的checksum
        $strs = $this->get_signed_int($strs);

        switch (true)
        {
            case ($partial["data"][0]["checksum"]==$strs);
                return true;
                break;
            default:
                return false;
                break;
        }
//        print_r("\nchecksum:".$strs);
    }

    /**
     * 深度合并
     * @param $partial
     * @param $update
     * @return false|string
     */
    function depthMerge($partial, $update){

        $partial = json_decode($partial,true);
        $update = json_decode($update,true);

        $ndata = $partial;

        $partialAsks = $partial["data"][0]["asks"];
        $partialBids = $partial["data"][0]["bids"];
        $updateAsks = $update["data"][0]["asks"];
        $updateBids = $update["data"][0]["bids"];

        if (!empty($updateAsks)){

            for ($i=0; $i<count($partialAsks); $i++){
                for($j=0; $j<count($updateAsks); $j++){
                    switch (true){
                        // 如果价格相同
                        case ($updateAsks[$j][0]==$partialAsks[$i][0]);
                            switch (true){
                                // 数量为0删除此深度，数量有变化则替换此数据
                                case ($updateAsks[$j][1] == 0);
                                    unset($ndata["data"][0]["asks"][$i]);
                                    break;
                                // 同价格，不同数量，替换
                                case ($updateAsks[$j][1] != $partialAsks[$i][1]);
                                    $ndata["data"][0]["asks"][$i][1] = $updateAsks[$j][1];
                                    break;
                            }
                            break;
                        // 如何价格不同
                        case (!$this->deep_in_array($updateAsks[$j][0],$ndata["data"][0]["asks"]) and $updateAsks[$j][1] != 0);
                            array_push($ndata["data"][0]["asks"], $updateAsks[$j]);
                            break;
                    }
                }
            }
        }

        if (!empty($updateBids)){

            for ($i=0; $i<count($partialBids); $i++){
                for($j=0; $j<count($updateBids); $j++){
                    switch (true){
                        // 如果价格相同
                        case ($updateBids[$j][0] == $partialBids[$i][0]);
                            switch (true){
                                case ($updateBids[$j][1] ==0);
                                    unset($ndata["data"][0]["bids"][$i]);
                                    break;
                                case ($updateBids[$j][1] != $partialBids[$i][1]);
                                    $ndata["data"][0]["bids"][$i][1] = $updateBids[$j][1];
                                    break;
                            }
                            break;

                        // 如果 价格不同
                        case (!$this->deep_in_array($updateBids[$j][0], $ndata["data"][0]["bids"]) and $updateBids[$j][1] != 0);
                            array_push($ndata["data"][0]["bids"], $updateBids[$j]);
                            break;
                    }
                }
            }
        }

        // asks 从小到大排序
        $askPrices = array_column($ndata["data"][0]["asks"],0);
        array_multisort($askPrices,SORT_ASC,$ndata["data"][0]["asks"]);

        // bids 从大到小排序
        $bidPrices = array_column($ndata["data"][0]["bids"],0);
        array_multisort($bidPrices,SORT_DESC,$ndata["data"][0]["bids"]);

        // 换 checksum
        $ndata["data"][0]["checksum"] = $update["data"][0]["checksum"];

//        print_r(json_encode($ndata));
        return json_encode($ndata);
    }

    /**
     * 获取32位校验码
     * @param $in
     * @return float|int
     */
    protected function get_signed_int($in) {
        $int_max = pow(2, 31)-1;
        if ($in > $int_max){
            $out = $in - $int_max * 2 - 2;
        }
        else {
            $out = $in;
        }
        return $out;
    }

    /**
     * // 数组的深度搜索
     * @param $value
     * @param $array
     * @return bool
     */
    protected function deep_in_array($value, $array) {
        foreach($array as $item) {
            if (!is_array($item)) {
                if ($item == $value) {
                    return true;
                } else {
                    continue;
                }
            }

            if (in_array($value, $item)) {
                return true;
            } else if ($this->deep_in_array($value, $item)) {
                return true;
            }
        }

        return false;
    }

    public function getCrc32($strs){

        $strs = crc32($strs);

        // 计算前25档的checksum
        $strs = $this->get_signed_int($strs);

        print_r($strs);
        print_r("\n");
    }
}
