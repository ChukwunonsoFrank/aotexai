import Datafeed from "./datafeed.js";

function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?]" + name + "=([^#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

function initOnReady() {
    var symbol = getParameterByName('symbol');
    window.tvWidget = new TradingView.widget({
        fullscreen: false,
        symbol: symbol,
        width: '100%',
        height: '260',
        interval: '5',
        container: "tv_chart_container",
        custom_formatters: {
            priceFormatterFactory: (symbolInfo, minTick) => {
                return {
                    format: (price, signPositive) => {
                        var precision = Math.log(symbolInfo.pricescale) / Math.log(10);
                        return price.toLocaleString("en-US",{ minimumFractionDigits: precision, maximumFractionDigits: precision })
                    },
                };
            }
        },
        datafeed: Datafeed,
        library_path: "charting_library/",
        locale: "en",
        custom_css_url: 'css/style.css',
        custom_font_family: "'AileronRegular'",
        enabled_features: ["disable_resolution_rebuild", "remove_library_container_border"],
        disabled_features: ["tick_resolution","left_toolbar", "property_pages", "timeframes_toolbar","scales_context_menu","adaptive_logo","go_to_date","timezone_menu","header_widget","use_localstorage_for_settings","save_chart_properties_to_local_storage", "control_bar", "edit_buttons_in_legend", "context_menus","create_volume_indicator_by_default","volume_force_overlay","main_series_scale_menu", "display_market_status", "border_around_the_chart"],
        hide_top_toolbar: true,
        hideideas: true,
        loading_screen: { backgroundColor: "#232629", foregroundColor: "#FBD53D"},
        theme: "dark",
        overrides: {
            "paneProperties.backgroundType": "solid",
            "paneProperties.background":  "#171818",
            "paneProperties.legendProperties.showSeriesTitle": false,
            "paneProperties.legendProperties.showBarChange":  true,
            "scalesProperties.textColor":  "#ffffff",
            "scalesProperties.backgroundColor":  "#171818",
            "scalesProperties.fontSize":  12,
            "scalesProperties.lineColor":  "#232629",

            // Candles styles
            "mainSeriesProperties.candleStyle.upColor": "#73BC9F",
            "mainSeriesProperties.candleStyle.downColor": "#DF837F",
            "mainSeriesProperties.candleStyle.drawWick": true,
            "mainSeriesProperties.candleStyle.drawBorder": true,
            "mainSeriesProperties.candleStyle.borderColor": "#378658",
            "mainSeriesProperties.candleStyle.borderUpColor": "#406B5A",
            "mainSeriesProperties.candleStyle.borderDownColor": "#AA2D27",
            "mainSeriesProperties.candleStyle.wickUpColor": "#2E374D",
            "mainSeriesProperties.candleStyle.wickDownColor": "#2E374D",
            "mainSeriesProperties.candleStyle.barColorsOnPrevClose": false,

            // Bar styles
            "mainSeriesProperties.barStyle.upColor": "#73BC9F",
            "mainSeriesProperties.barStyle.downColor": "#DF837F",
            "mainSeriesProperties.barStyle.barColorsOnPrevClose": false,
            "mainSeriesProperties.barStyle.dontDrawOpen": false,

            // Line styles
            "mainSeriesProperties.lineStyle.color": "#FCD63E",
            "mainSeriesProperties.lineStyle.linewidth": 1,
            "mainSeriesProperties.lineStyle.priceSource": "close",

            // Area styles
            "mainSeriesProperties.areaStyle.color1": "rgba(86, 125, 204, 0.28)",
            "mainSeriesProperties.areaStyle.color2": "#567dcc",
            "mainSeriesProperties.areaStyle.linecolor": "#567dcc",
            "mainSeriesProperties.areaStyle.linewidth": 2,
            "mainSeriesProperties.areaStyle.priceSource": "close",
            "mainSeriesProperties.areaStyle.transparency": 100,

        },
    });
    window.tvWidget.onChartReady(function () {
        window.tvWidget.activeChart().getTimeScale().defaultRightOffset().setValue(0);
        window.tvWidget.activeChart().setChartType(parseInt('3'));
    })
};


window.addEventListener('DOMContentLoaded', initOnReady, false);
