//resolution string (1W...)
function setChartResolution(resolution) {
   // console.log('[setResolution]: will set:',resolution);
    let w = window.tvWidget;
    if (w === undefined){
        console.log("tvWidget is undefined");
        return;
    }
    w.onChartReady(function () {
        w.activeChart().setResolution(resolution, () => console.log('[setResolution]: got callback.'));
        //console.log('[setResolution]: was set');
    });
}
function setChartType(chartType) {
   // console.log('[setChartTypesetChartType]: will set:',chartType);
    let w = window.tvWidget;
    if (w === undefined){
        console.log("tvWidget is undefined");
        return;
    }
    w.onChartReady(function () {
        w.activeChart().onChartTypeChanged().subscribe(null, (s) => console.log('The type of chart is changed', s), true);
        w.activeChart().setChartType(parseInt(chartType));
    });
}
