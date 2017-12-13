using Microsoft.Owin;
using Owin;

[assembly: OwinStartupAttribute(typeof(_15.ASP.NET_BookLibrary.Startup))]
namespace _15.ASP.NET_BookLibrary
{
    public partial class Startup
    {
        public void Configuration(IAppBuilder app)
        {
            ConfigureAuth(app);
        }
    }
}
