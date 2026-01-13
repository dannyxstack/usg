$(document).ready(function() {
    // Smooth scrolling (unchanged)
    $('a[href^="#"]').on('click', function(e) {
      e.preventDefault();
      var target = $(this.hash);
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
      }
    });
  
    // Form submission (unchanged)
    // $('form').on('submit', function(e) {
    //   if (!$(this).hasClass('search-form')) {
    //     e.preventDefault();
    //     alert('Form submitted! (Demo)');
    //   }
    // });
  
    // Search toggle
    $('.search-icon').on('click', function() {
      $('.search-form').toggle();
    });

    
    
  });

  function performSiteSearch(event) {
    event.preventDefault(); // 阻止表单默认提交（防止页面刷新）
  
    const query = document.getElementById('siteSearchInput').value.trim();
  
    if (query === '') {
      alert('请输入搜索内容');
      return;
    }
  
    // 母公司 unityskills.com.au
    // 两个分校 uscohealth.edu.au
    // uscohospitality.edu.au

    // 构造 Google 站内搜索 URL
    const searchUrl = `https://www.google.com/search?q=site:unityskills.com.au ${encodeURIComponent(query)}`;
  
    // 在新标签页打开
    window.open(searchUrl, '_blank');
  
    // 可选：清空输入框
    document.getElementById('siteSearchInput').value = '';
  }