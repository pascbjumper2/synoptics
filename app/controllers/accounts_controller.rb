class AccountsController < ApplicationController

	def index	
		@accounts = Account.all
	end

	def show
		@account = Account.find(params[:id])
	end

	def new #displays a form
		@account = Account.new
	end

	def create #Saves and redirects
		@account = Account.new(allowed_params)
		
		if @account.save
			flash[:notice] = "Account created!"
			redirect_to ''
		else
			render 'new'
		end
	end

	def edit
		@account = Account.find(params[:id])
	end

	def editmodal
		@account = Account.find(params[:id])
	end

	def update
		@account = Account.find(params[:id])
		if @account.update_attributes(allowed_params)
			redirect_to accounts_path
		else
			render 'new'
		end
	end

	def destroy
		@account = Account.find(params[:id])
		@account.destroy
		flash[:notice] = "Account removed!"
		redirect_to ''
	end

	def accounts #Yes, magic has been done here!
		@account = Account.new
		@accounts = Account.all
		render :layout => false
	end

	
	private
		def allowed_params
			params.require(:account).permit(:name, :description, :number, :acc_type, :acc_class)
		end
		
end
